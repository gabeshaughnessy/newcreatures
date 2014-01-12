<?php
$show_help_text = false;
$help_flags = array("-h", "--help");
foreach($help_flags as $flag)
    {
    if(in_array($flag, $_SERVER['argv']))
        {
        $show_help_text = true;
        }        
    }

$cli_args = Array();
if(sizeof($_SERVER['argv']) > 1)
    {
    for($i=1; $i<sizeof($_SERVER['argv']); $i++)
        {
        $cli_arg = explode(":", $_SERVER['argv'][$i]);
        $cli_args[str_replace("--", "", $cli_arg[0])] = $cli_arg[1];
        }
    }
    else{
        $show_help_text = true;
        }

if($show_help_text)
    {
    $environment_list = '{development|staging|production}';
    echo 'Usage: php scripts/getdata.php [--from:'.$environment_list.']'.PHP_EOL;
    echo '                               [--to:'.$environment_list.']'.PHP_EOL;
    exit;
    }

/* SET UP ENVIRONMENTS */
$parent_directory = str_replace("/scripts", "", dirname(__FILE__));
if ( file_exists( $parent_directory.'/local-config.php' ) ) {
    include( $parent_directory.'/local-config.php' );

    $local_db_host = explode(":", DB_HOST);
    $environments["development"]    =    array(
    'DB_NAME' => DB_NAME,
    'DB_USER' => DB_USER,
    'DB_PASSWORD' => DB_PASSWORD,
    'DB_HOST' => $local_db_host[0],
    'DB_PORT' => $local_db_host[1]
    );
}

$environments["production"]    =    array(
    'DB_NAME' => 'livlivem_wor3',
    'DB_USER' => 'livlivem',
    'DB_PASSWORD' => '@Sharia123',
    'DB_HOST' => '66.147.244.240'
    );
$environments["staging"]    =    array(
    'DB_NAME' => 'livlivem_wor3',
    'DB_USER' => 'livlivem',
    'DB_PASSWORD' => '@Sharia123',
    'DB_HOST' => '66.147.244.240'
    );

/* BUILD COMMAND STRINGS */
$dump_command  = PATH_TO_MYSQL_UTILITIES.'mysqldump --opt -h '.$environments[$cli_args["from"]]["DB_HOST"];
$dump_command .= ' --quick --verbose';
$dump_command .= ' --user='.$environments[$cli_args["from"]]["DB_USER"].' --password='.$environments[$cli_args["from"]]["DB_PASSWORD"];
$dump_command .= ' --result-file='.dirname(__FILE__).'/dumps/'.$environments[$cli_args["from"]]["DB_NAME"].'.sql '.$environments[$cli_args["from"]]["DB_NAME"];
$dump_command .= ' wp_posts wp_postmeta wp_comments wp_commentmeta wp_terms wp_term_taxonomy wp_term_relationships wp_users wp_usermeta';

$import_command  = PATH_TO_MYSQL_UTILITIES.'mysql -h '.$environments[$cli_args["to"]]["DB_HOST"];
if($cli_args["to"] == "development"){
    $import_command .= ' --port='.$environments["development"]["DB_PORT"];
    }
$import_command .= ' --user='.$environments[$cli_args["to"]]["DB_USER"].' --password='.$environments[$cli_args["to"]]["DB_PASSWORD"].' --verbose';
$import_command .= ' '.$environments[$cli_args["to"]]["DB_NAME"].' < '.dirname(__FILE__).'/dumps/'.$environments[$cli_args["from"]]["DB_NAME"].'.sql';


passthru($dump_command);
passthru($import_command);
echo PHP_EOL.'Job Complete: from='.$cli_args["from"].' to='.$cli_args["to"].PHP_EOL;
?>
