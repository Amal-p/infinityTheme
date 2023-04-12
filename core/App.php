<?php

namespace App;


class App
{

    public function run($post_slug, $values = [])
    {
        global $post;

        $values['post_slug'] = $post->post_name;
        $values['template_directory'] = get_template_directory_uri();
        $values['home_url'] = home_url();


        $this->loader($post_slug, $values);
    }

    public function route(){
        global $post;
        $file = $post->post_name;
        try {
            if(file_exists('wp-content/themes/infinityTheme/pages/'.$file.'.php')){
        
                require 'wp-content/themes/infinityTheme/pages/'.$file.'.php';
                $page = $file.'/'.$file;
            }else{
                $page = '404';
                $page_content = [];
            }
        } catch (\Throwable $th) {
            
        }
        return ["page"=>$page, "page_content"=>$page_content];
    }

    public function component($post_slug, $values=[]){

        global $post;

        $values['post_slug'] = $post->post_name;
        $values['template_directory'] = get_template_directory_uri();
        $values['home_url'] = home_url();

        ob_start();
        include_once ('wp-content/themes/infinityTheme/core/Core.php');
        include 'wp-content/themes/infinityTheme/components/'.$post_slug.'.php';
        $output = ob_get_clean();
        return $output;
    }

    public function includeWithVariables($filePath, $variables = array(), $print = true)
    {
 
        $output = NULL;
        if (file_exists($filePath)) {
            // Extract the variables to a local namespace
            extract($variables);

            // Start output buffering
            ob_start();

            // Include the template file
            include_once ('wp-content/themes/infinityTheme/core/Core.php');
            include $filePath;
            // End buffering and return its contents
            $output = ob_get_clean();
        }
        if ($print) {
            print $output;
        }
        return $output;
    }

    public function loader($component, $values)
    {
        $this->values = $values;

        
        // include $component . '.php';
        $this->includeWithVariables('wp-content/themes/infinityTheme/components/'.$component . '.php', ["values"=>$values]);
    }
}
