<?php 
 namespace Core;

 class Core{
    public function __construct()
    {
        require 'wp-content/themes/infinityTheme/vendor/autoload.php';
    }


    public static function Extension($twig){
        if(WP_DEBUG){
            $twig->addExtension(new \Twig\Extension\DebugExtension());
        }
    } 


    public static function create($tag,$values){
        $path = 'wp-content/themes/infinityTheme/components/view/';
        if(file_exists($path.'/'.$tag)){
            $loader = new \Twig\Loader\FilesystemLoader($path);
            $twig = new \Twig\Environment($loader,[
                'debug' => WP_DEBUG,
            ]);
            self::Extension($twig);
            $template = $twig->load($tag);

            ob_start();
            $output =  $template->render($values);
            ob_end_clean();
            echo $output;

        }else{
            $loader = new \Twig\Loader\ArrayLoader(["index"=>$tag]);

            $twig = new \Twig\Environment($loader,[
                'debug' => WP_DEBUG,
            ]);
            self::Extension($twig);
            ob_start();
            $output = $twig->render('index', $values);
            ob_get_clean();
            echo $output;
        }

        
    }
 }