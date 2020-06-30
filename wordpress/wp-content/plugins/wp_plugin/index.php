<?php
/*
Plugin Name: MonPlugin
Plugin URI: 
Description: First step to create a wordpress plugin
Version: 0.0.1
Author: Soumaya & Imane
Author URI: www.soumaya.com
License: GPLv2 or later
*/


add_action("admin_menu","addMenu");


function addMenu() {
    add_menu_page( 'MonPlugin', 'MonPlugin', 'read', 'MonPlugin_Dashboard', 'MonPlugin_index' );
    add_submenu_page( 'MonPlugin_Dashboard', 'MonPlugin', 'parametre', 'read', 'MonPlugin_Dashboard', 'MonPlugin_index');
    add_submenu_page( 'MonPlugin_Dashboard', 'MonPlugin', 'information', 'read', 'MonPlugin_NouvellePage', 'MonPlugin_NouvellePage');
}



function MonPlugin_index(){
  
  global $wpdb;
  if(isset($_POST['submit'])){
      $option=$_POST['option'];
      $name = $_POST['inputtxt'];
      $msg = $_POST['inputarea'];
$table_name = $wpdb->prefix . "plugin_table";

$wpdb->insert( $table_name, array(
                      'inputtxt' => $name,
                      'inputarea' => $msg,
                      'option'=>$option
                      )); 
  echo '
    <div id="message" class="updated below-h2">
      <p>données enregistrées consultez votre page d informations</p>
    </div>
  ';
  }
?>      
<h1 style="font-size:23px; text-align: center; font-size: 50px;">Enregistrez quelques infos</h1> 
 <form action="" method="post"  >
  <table >
      <tr>
        <td><label style="font-size:23px ;  " for="inputtxt">Nom</label></td>
        <td><input style="width:400%" type="text" name="inputtxt" id="inputtxt"  required/><br></td>
      </tr>
      <tr>
        <td><label style="font-size:23px". for="inputarea">Message</label></td>
        <td><textarea style="width:400%" type="text" name="inputarea" id="inputarea"  required></textarea></td>
      </tr>
      <tr>
        <td><label style="font-size:23px" for="option">options</label></td>
        <td>
          <select style="width:400%" name="option" id="option" required>
            <option value="safi">safi</option>
            <option value="fes">fes</option>
            <option value="casa">casa</option>
          </select>
        </td>
      </tr>
      
      
    </table><br>
    <input style= "background: #F6B835;" type="submit" class="button button-primary button-hero load-customize hide-if-no-customize" name="submit"/>
</form>
<?php

}


function MonPlugin_NouvellePage(){
    
    
    echo '<h1 style="  text-align: center; font-size: 50px; ">toutes les données</h1>';
    
    
    global $wpdb;
    $table_name = $wpdb->prefix . "plugin_table";
    $results = $wpdb->get_results( "SELECT * FROM $table_name"); 
    ?>
   
    <?php
if(!empty($results))  
{  
    
    
    
    
    ?>  
    
    <table style="width:70% ; background: #F6B835;  " class="wp-list-table widefat fixed striped pages text-center" >
        <thead>
            <tr >
                <th  >ID</th>
                <th>Nom</th>
                <th>message</th>
                <th> option</th>
            </tr>
        </thead>
        
    <?php
          
    foreach($results as $row){   
        
        ?>
        <tr>
            <td><?php  echo $row->id ; ?></td>
            <td><?php echo $row->inputtxt ;?></td>
            <td><?php echo $row->inputarea ;?></td>
            <td><?php echo $row->option ;?></td>
        </tr>
     
        <?php
    }
    ?>
    <tbody>
  </table>
<?php
}else{
    echo 'il n y a pas de données pour l instant';
}
?>
    
<?php
}
//le plugin est activé
register_activation_hook( __FILE__, 'create_table' );

function create_table(){
    global $wpdb;

    $table_name = $wpdb->prefix . "plugin_table";  

    $sql = "CREATE TABLE $table_name (
      id int(10) unsigned NOT NULL AUTO_INCREMENT,
      inputtxt varchar(255) NOT NULL,
      inputarea varchar(255) NOT NULL,
      option varchar(5) NOT NULL,
      
      PRIMARY KEY  (id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

    
}

//  le plugin est désactivé
register_deactivation_hook( __FILE__, 'remove_table' );

function remove_table() {
    global $wpdb;
     $table_name = $wpdb->prefix . 'plugin_table';
     $sql = "DROP TABLE IF EXISTS $table_name";
     $wpdb->query($sql);
     delete_option("my_plugin_db_version");
} 

?>
