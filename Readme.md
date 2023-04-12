# infinityTheme
## Installation

### Note
- The theme folder name must the `infinityTheme`
- composer install if it have any vendor folder
 `composer install`
- move .vscode/`infinityTheme.code-snippets` to base folder 

## Setup Page's
- Open `\pages\` folder create `page_name.php` file
- Setup it as page by wordpress `template` method
- Call the `App`
- Call the `run` method to load direct component
- If a component inside another component date call the `component method inside array`, and inside twig  give -  ` | raw` eg :- `{{ variable_name | raw }}`


## Setup Component
- Create component file inside `components` folder 
- Call `Core` class
- Call `create` function with `HTML - Twig as first parameter`, and `$values`
second parameter
### Note :- 
- `There a view folder you can create .html.twig to create twig file call the file name as first parameter`
- `$values is must not change`

# Short Code

<table border='1'>
<tr>
<th>Short Code</th>
<th>Usage</th>
<th>Appearing Code</th>
</tr>


<tr>
<td>
i-cmp
</td>
<td>
Create a Component
</td>
<td>
use Core\Core;

$obj = new Core;


$comp = $obj->create(
    'html with twig code',
    $values
);
</td>
</tr>

<tr>
<td>
i-route
</td>
<td>
Get Route
</td>
<td>
$route = $proj->route();
$route variable returns an array have two values `page`, `page_content`
</td>
</tr>


<tr>
<td>
i-cmp-picker
</td>
<td>
Select a Component
</td>
<td>
$proj->compnent('component', [replacing text as key value pair]);

</td>
</tr>


<tr>
<td>
i-cmp-picker
</td>
<td>
Select a Component
</td>
<td>
$proj->compnent('component', [replacing text as key value pair]);

</td>
</tr>


<tr>
<td>
i-app
</td>
<td>
To run the app
</td>
<td>
require 'wp-content/themes/infinityTheme/core/App.php';
use App\App;

$proj = new App();

$proj -> run('component_name', ['value to pass the component']);

<h2>Note :-</h2> component_name must the file name

</td>
</tr>

<tr>
<td>
i-temp
</td>
<td>
To set Template Name
</td>
<td>

/* Template Name: template_name */

</td>
</tr>

<tr>
<td>
i-run
</td>
<td>
To get run function
</td>
<td>
$object_variable -> run('component_name', ['value to pass the component']);

</td>
</tr>

<tr>
<td>
i-home
</td>
<td>
To get home url
</td>
<td>
home_url();

</td>
</tr>

<tr>
<td>
i-tmp-uri
</td>
<td>
To get Template url
</td>
<td>
get_template_directory_uri();

</td>
</tr>

<tr>
<td>
i-slug
</td>
<td>
To post slug
</td>
<td>
global $post; <br>
$post_slug = $post->post_name;

</td>
</tr>

<tr>
<td>
i-post-fetch
</td>
<td>
To fetch code of Custom post
</td>
<td>
Array with while loop and WPquery class

</td>
</tr>


</table>





- Global components presents `global` folder
- SVG presents in `svg` folder
- The demo code will also inside theme


# CLI
`php infinityTheme.theme pvc <name_of_file>`
- name_of_file it will apply to folder name also in `components` and `view`
- p -> page
- v -> view
- c -> components

# Twig Global variables inside theme

- `post_slug` -> To get current slug
- `template_directory` -> To get template directory path
- `home_url` -> To get Home url

<br><address align="center">
<font color="#CC5500">
Amal P<br>
amal.p@infospica.com
</font>
</address>
