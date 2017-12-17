
<!DOCTYPE html>
<html> 
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="initial-scale=1, maximum-scale=1,user-scalable=no">
    <title>Lost n Found</title>

    <link rel="stylesheet" href="https://js.arcgis.com/3.22/esri/css/esri.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      html, body { height: 100%; width: 100%; margin: 0; overflow: hidden; }
      #map { height: 100%; padding: 0; margin-left:70px; margin-bottom:20px; margin-top: 20px;}
      #header{ height: 2em; text-align: center; font-size: 1.1em; padding: 0.5em;}
      #sidebar{height: 2em; text-align: center; font-size: 1.1em; padding: 0.5em;}
      #footer { height: 2em; text-align: center; font-size: 1.1em; padding: 0.5em; margin-bottom: 50px; }
      .dj_ie .infowindow .window .top .right .user .content { position: relative; }
      .dj_ie .simpleInfoWindow .content {position: relative;}
input[type=text], select, textarea {width: 100%;padding: 15px;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;margin-top: 6px;margin-bottom: 16px;resize: vertical;}
input[type=search], textarea{width:100%;padding: 7px 17px;order: 1px solid #ccc;border-radius: 5px;box-sizing: border-box;}
input[type=submit]{background-color: #45a049;color: white;padding: 10px 19px;border: none;border-radius: 3px;margin-left: 40px;margin-top: 6px;
}
input[type=button] {background-color: #4CAF49;color: white;padding: 10px 19px;border: none;border-radius: 3px;cursor: pointer;margin-left: 40px; margin-top: 4px;}
#container {width: 120%;border-radius: 10px;background-color: #f2f2f2;padding: 10px;}
#print{ height: 4em; text-align: right; font-size: 1.1em;display: block;}
#label{text-align:center;}
#searchmap {
         display: block;
         position: absolute;
         z-index: 2;
         top: 20px;
         left: 74px;
      }
table, th, td {
    border: 1px solid black;
}
      ul {
    list-style-type: none;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    margin-right: 0px;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 11px 18px;
    text-decoration: none;

}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

    </style>
    </head>

    <script src="https://js.arcgis.com/3.22/"></script>
     <body>
    <div data-dojo-type="dijit/layout/BorderContainer" 
         data-dojo-props="design:'headline'" 
         style="width:100%;height:100%;">

      <div id="map" 
           data-dojo-type="dijit/layout/ContentPane" 
           data-dojo-props="region:'center'">
           <div id="searchmap"></div>
         </div>

      <div id="footer"
           data-dojo-type="dijit/layout/ContentPane" 
           data-dojo-props="region:'bottom'">

          
         <div id="container" 
           data-dojo-type="dijit/layout/ContentPane" 
           data-dojo-props="region:'right'">
           <div class="container">
            <div style="float:right; margin-right:40px;" ><form action="search.php" method="post"> <button class="btn btn-info btn-lg" name="delete">
          <span class="glyphicon glyphicon-trash"></span>Delete ID 
        </button></form></div>
  
  <div id="label">
         <label>Owners's Details<label>
         </div>
         <div id="submit-data"></div>
         </div>
</div>
        <hr>
      </div>
      <div id="header"
       data-dojo-type="dijit/layout/ContentPane" 
           data-dojo-props="region:'top'">
           <strong><ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="#news">Online ID Application</a></li>
  
    
    <li><a href="#contact"  data-toggle="modal" data-target="#myModal">Download Gate Pass</a></li>
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Do You Want a temporary Gate Pass?</h4>
        </div>
        <div class="modal-body">
          <p><strong><em><font color="red">NOTE</font></em></strong> This Temporary Gate Pass Will only serve you for a period of 2 weeks, try to find your ID before the stated time elapses!.</p>
          <?php
 $pdo = new PDO("mysql:host=localhost;dbname=studentid", "root", "");
 // Set the PDO error mode to exception

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "SELECT * FROM download";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
      echo"<tr>";
      echo"<td>";?> <a href="<?php echo $result['path']; ?>">
           <input type="submit" name="submit" value="Download Gate Pass" />
    </a> <?php echo"</td>";
      echo"</tr>";
    }
    ?>
    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <li><a href="#about">Found Items</a></li>
  <a href=""><div style="float:left" ><span style="font-size: 20px !important; color: #aaaaaa;"><em>LOST N FOUND ID</em></span></div></a>
  
</ul></strong>  
         </div>
         <div id="sidebar"
         data-dojo-type="dijit/layout/ContentPane" 
           data-dojo-props="region:'left'">
           <h3>Post Found ID</h3>

<div id="container">
   <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
  <script src="global.js"></script>

  <form action="submit.php" method="post" >
    <label for="name">Name</label></br>
    <input type="text" id="name" name="name" placeholder="Owners's name.." required></br>

    <label for="lname">Reg_no</label></br>
    <input type="text" id="reg_no" name="reg_no" placeholder="Owner's reg_no.." required></br>

    <label for="terminal">ID Terminals</label></br>
    <select id="terminal" name="terminal" >
      <option value="main_gate">Main Gate</option>
      <option value="bssc">BSSC</option>
      <option value="nyayo_gate">Nyayo Gate</option>
      <option value="library">Modern Library</option>
      <option value="pool">Swimming pool</option>
      <option value="annex">student Annex</option>
      <option value="">Select ID terminal</option>
    </select></br>
    <input type="submit" value="Post" name="submit" >

  </form>

</div>
<div id="search"data-dojo-type="dijit/layout/ContentPane" 
           data-dojo-props="region:'bottom'">
           <h3>  Search your Lost ID</h3>
<div id="container">
  <input name="search" type="search" id="search" placeholder="enter reg_no" required></br>
  <input type="button" id="id-submit" value="Search">
</div>
  
  <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
  <script src="global.js"></script>

    </div>
  </body>
    <script>

      var map;
      
      require([
        "esri/map",
        "esri/layers/FeatureLayer",
        "esri/dijit/editing/AttachmentEditor",
        "esri/dijit/Search",
        "esri/dijit/LocateButton",
  "esri/symbols/PictureMarkerSymbol",
  "esri/symbols/SimpleLineSymbol", "esri/Color",
  "esri/renderers/SimpleRenderer",
  "esri/InfoTemplate",
    "esri/layers/graphics",
    "esri/dijit/BasemapGallery",
    "esri/layers/FeatureLayer",
  "esri/layers/ArcGISDynamicMapServiceLayer",
    "esri/dijit/Legend",
    "esri/tasks/query",
    "esri/tasks/QueryTask",
    "dojo/_base/array",
    "esri/geometry/Extent",
    "esri/geometry/webMercatorUtils", "esri/geometry/Point",
    "esri/graphicsUtils",
    "dojo/keys",
    "dojo/on",
        "dojo/parser", "dojo/dom",
        "dijit/layout/BorderContainer", "dijit/layout/ContentPane", "dojo/domReady!"

      ], function(
        Map, FeatureLayer, AttachmentEditor,Search,LocateButton,PictureMarkerSymbol,SimpleLineSymbol, Color,SimpleRenderer,InfoTemplate, Graphics, BasemapGallery, FeatureLayer,ArcGISDynamicMapServiceLayer, Legend, Query, QueryTask, arrayUtils, Extent, webMercatorUtils, Point, graphicsUtils, keys, on,parser, dom) {
        parser.parse();
        var initialExtent = new esri.geometry.Extent({"xmin":36.910964 , "ymin": -1.187512, "xmax":36.941208 , "ymax": -1.172684 , "spatialReference": {"wkid": 4326}});
            // Create map
            var map = new Map("map", {
                basemap: "satellite",
                center: [36.928161,-1.179937],
                extent: initialExtent,
                zoom: 16
                });

            
             
        function load_defaults(evt)
            {
      
              var terminals = new FeatureLayer('https://services1.arcgis.com/Kw7jGaBPiN3WUAmT/arcgis/rest/services/ID_Terminals1/FeatureServer', {
                mode: FeatureLayer.MODE_ONDEMAND,
        infoTemplate: infoTemplate,
                outFields: ["*"], "opacity": 0.6
            });
               var symbol = new PictureMarkerSymbol("marker.png", 20, 20);
    terminals.setRenderer(new SimpleRenderer(symbol));

    map.addLayer(terminals);
  }


            });

           

    </script>
  

 
</html>