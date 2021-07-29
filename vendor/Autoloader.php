<?php
/**
 * Created by PhpStorm.
 * User: WILLY
 * Date: 5/3/2019
 * Time: 10:06
 */

/*namespace main\vendor;*/


class Autoloader
{
    /**
     * Autoloader constructor.
     * loads all the classes in the project
     */
    function __construct()
    {
        self::scan();
    }
    static private $directories, $files, $ext_filter, $recursive;

    /**
     *   scan the whole parent directory
     *   return file names
     */
    static public function scan(){
        // Initialize defaults
        self::$recursive = true;
        self::$directories = array();
        self::$files = array();
        self::$ext_filter = false;

        // Check we have minimum parameters
        if(!$args = func_get_args()){
            $args[0]=$_SERVER["DOCUMENT_ROOT"]."/2wframework";
        }

        // filter with [.] php extension
        self::$ext_filter[] = strtolower('php');

        $files = self::verifyPaths($args[0]);
        self::requireFiles($files);
    }
    static private function requireFiles($arrayFiles){
        foreach ($arrayFiles as $file) {
           $nodes=explode('2wframework'.DIRECTORY_SEPARATOR,$file);
            if ($nodes[1]=='vendor'.DIRECTORY_SEPARATOR.'Autoloader.php'){
                unset($nodes[1]);
            }
            if (!empty($nodes[1])) {
               require_once $nodes[1];
            }
        }

    }
    static private function verifyPaths($paths){
        $path_errors = array();
        if(gettype($paths) == "string"){$paths = array($paths);}

        foreach($paths as $path){
            if(is_dir($path)){
                self::$directories[] = $path;
                $dirContents = self::find_contents($path);
            } else {
                $path_errors[] = $path;
            }
        }

        if($path_errors){echo "The following directories do not exists<br />";die(var_dump($path_errors));}
        return $dirContents;
    }

    /**
     *  Scanning the whole directory for [.] php files
     * @param $dir
     * @return array
     */
    static private function find_contents($dir){
        $result = array();
        $root = scandir($dir);
        foreach($root as $value){
            if($value === '.' || $value === '..'||$value==='Autoloader.php') {continue;}
            if(is_file($dir.DIRECTORY_SEPARATOR.$value)){
                if(!self::$ext_filter || in_array(strtolower(pathinfo($dir.DIRECTORY_SEPARATOR.$value, PATHINFO_EXTENSION)), self::$ext_filter)){
                    self::$files[] = $result[] = $dir.DIRECTORY_SEPARATOR.$value;
                }
                continue;
            }
            if(self::$recursive){
                foreach(self::find_contents($dir.DIRECTORY_SEPARATOR.$value) as $value) {
                    self::$files[] = $result[] = $value;
                }
            }
        }
        $autoload='vendor'.DIRECTORY_SEPARATOR.'Autoloader.php';
        if (in_array($autoload,$result)){
            unset($result[$autoload]);
            echo 'unset <br>';
        }
        // Return required for recursive search
        return $result;
    }

}