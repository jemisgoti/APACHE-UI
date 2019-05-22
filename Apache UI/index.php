<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Xampp by Jemis Goti</title>
  <!-- Favicon -->
  <link href="assets/img/brand/favicon.ico" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="assets/css/argon.css?v=1.0.1" rel="stylesheet">
  <!-- Docs CSS -->
  <link type="text/css" href="assets/css/docs.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
   <script src="sorttable.js"></script>
</head>

<body>
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="index.php">
          <img src="assets/img/brand/blue1.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="index.php">
                  <img src="assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-ui-04 d-lg-none"></i>
                <span class="nav-link-inner--text">Guide</span>
              </a>
              <div class="dropdown-menu dropdown-menu-xl">
                <div class="dropdown-menu-inner">
                  <a href="howto.php" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                      <i class="ni ni-spaceship"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-primary mb-md-1">Getting started</h6>
                      <p class="description d-none d-md-inline-block mb-0">Learn how to use Xampp.</p>
                    </div>
                  </a>
                  <a href="faq.php" class="media d-flex align-items-center">
                    <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                      <i class="ni ni-palette"></i>
                    </div>
                    <div class="media-body ml-3">
                      <h6 class="heading text-primary mb-md-1">FAQs</h6>
                      <p class="description d-none d-md-inline-block mb-0">Learn more about Apache UI.</p>
                    </div>
                  </a>
               
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-collection d-lg-none"></i>
                <span class="nav-link-inner--text">Update</span>
              </a>
              <div class="dropdown-menu">
                <a href="../examples/landing.html" class="dropdown-item">UI Update</a>
                <a href="../examples/profile.html" class="dropdown-item">Xampp Update</a>
              
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
       
            <li class="nav-item d-none d-lg-block ml-lg-4">
              <a href="http://localhost/dashboard/phpinfo.php" target="_blank" class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon">
                  <i class="fa fa-info mr-2"></i>
                </span>
                <span class="nav-link-inner--text">phpinfo</span>
              </a>
            </li>
            <li class="nav-item d-none d-lg-block ml-lg-4">
              <a href="http://localhost/phpmyadmin/" target="_blank" class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon">
                  <i class="fa fa-database mr-2"></i>
                </span>
                <span class="nav-link-inner--text">phpMyAdmin</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section class="section section-shaped section-lg">
      <div class="shape shape-style-1 bg-gradient-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="card bg-secondary shadow border-0">
             
              <div class="card-body px-lg-5 py-lg-5">
              
             <div id="container" style="overflow-x:auto;">
 <center><h1>List of Projects</h1></center> 

  <table class="sortable">
      <thead>
    <tr>
      <th>Filename</th>
      <th>Type</th>
      <th>Size</th>
      <th>Date Modified</th>
    </tr>
      </thead>
      <tbody><?php

  // Adds pretty filesizes
  function pretty_filesize($file) {
    $size=filesize($file);
    if($size<1024){$size=$size." Bytes";}
    elseif(($size<1048576)&&($size>1023)){$size=round($size/1024, 1)." KB";}
    elseif(($size<1073741824)&&($size>1048575)){$size=round($size/1048576, 1)." MB";}
    else{$size=round($size/1073741824, 1)." GB";}
    return $size;
  }

  // Checks to see if veiwing hidden files is enabled
  if($_SERVER['QUERY_STRING']=="hidden")
  {$hide="";
   $ahref="./";
   $atext="Hide";}
  else
  {$hide=".";
   $ahref="./?hidden";
   $atext="Show";}

   // Opens directory
   $myDirectory=opendir(".");

  // Gets each entry
  while($entryName=readdir($myDirectory)) {
     $dirArray[]=$entryName;
  }

  // Closes directory
  closedir($myDirectory);

  // Counts elements in array
  $indexCount=count($dirArray);

  // Sorts files
  sort($dirArray);

  // Loops through the array of files
  for($index=0; $index < $indexCount; $index++) {

  // Decides if hidden files should be displayed, based on query above.
      if(substr("$dirArray[$index]", 0, 1)!=$hide) {

  // Resets Variables
    $favicon="";
    $class="file";

  // Gets File Names
    $name=$dirArray[$index];
    $namehref=$dirArray[$index];

  // Gets Date Modified
    $modtime=date("M j Y g:i A", filemtime($dirArray[$index]));
    $timekey=date("YmdHis", filemtime($dirArray[$index]));


  // Separates directories, and performs operations on those directories
    if(is_dir($dirArray[$index]))
    {
        $extn="&lt;Directory&gt;";
        $size="&lt;Directory&gt;";
        $sizekey="0";
        $class="dir";

      // Gets favicon.ico, and displays it, only if it exists.
        if(file_exists("$namehref/favicon.ico"))
          {
            $favicon=" style='background-image:url($namehref/favicon.ico);'";
            $extn="&lt;Website&gt;";
          }

      // Cleans up . and .. directories
        if($name=="."){$name=". (Current Directory)"; $extn="&lt;System Dir&gt;"; $favicon=" style='background-image:url($namehref/.favicon.ico);'";}
        if($name==".."){$name=".. (Parent Directory)"; $extn="&lt;System Dir&gt;";}
    }

  // File-only operations
    else{
      // Gets file extension
      $extn=pathinfo($dirArray[$index], PATHINFO_EXTENSION);

      // Prettifies file type
      switch ($extn){
        case "png": $extn="PNG Image"; break;
        case "jpg": $extn="JPEG Image"; break;
        case "jpeg": $extn="JPEG Image"; break;
        case "svg": $extn="SVG Image"; break;
        case "gif": $extn="GIF Image"; break;
        case "ico": $extn="Windows Icon"; break;

        case "txt": $extn="Text File"; break;
        case "log": $extn="Log File"; break;
        case "htm": $extn="HTML File"; break;
        case "html": $extn="HTML File"; break;
        case "xhtml": $extn="HTML File"; break;
        case "shtml": $extn="HTML File"; break;
        case "php": $extn="PHP Script"; break;
        case "js": $extn="Javascript File"; break;
        case "css": $extn="Stylesheet"; break;

        case "pdf": $extn="PDF Document"; break;
        case "xls": $extn="Spreadsheet"; break;
        case "xlsx": $extn="Spreadsheet"; break;
        case "doc": $extn="Microsoft Word Document"; break;
        case "docx": $extn="Microsoft Word Document"; break;

        case "zip": $extn="ZIP Archive"; break;
        case "htaccess": $extn="Apache Config File"; break;
        case "exe": $extn="Windows Executable"; break;

        default: if($extn!=""){$extn=strtoupper($extn)." File";} else{$extn="Unknown";} break;
      }

      // Gets and cleans up file size
        $size=pretty_filesize($dirArray[$index]);
        $sizekey=filesize($dirArray[$index]);
    }

  // Output
   echo("
    <tr class='$class'>
      <td><a href='./$namehref'$favicon class='name'>$name</a></td>
      <td><a href='./$namehref'>$extn</a></td>
      <td sorttable_customkey='$sizekey'><a href='./$namehref'>$size</a></td>
      <td sorttable_customkey='$timekey'><a href='./$namehref'>$modtime</a></td>
    </tr>");
     }
  }
  ?>

      </tbody>
  </table>

  <center><h2><?php echo("<a href='$ahref'>$atext hidden files</a>"); ?></h2></center>
</div>




              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="container">
      <div class="row row-grid align-items-center mb-5">
        <div class="col-lg-6">
          <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
          <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
        </div>
        <div class="col-lg-6 text-lg-center btn-wrapper">
          <a target="_blank" href="https://twitter.com/Jemspatel11" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-twitter"></i>
          </a>
          <a target="_blank" href="https://www.facebook.com/jemis.goti.67" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip" data-original-title="Like us">
            <i class="fa fa-facebook-square"></i>
          </a>
          <a target="_blank" href="https://www.instagram.com/call_me__jems_0/" class="btn btn-neutral btn-icon-only btn-instagram btn-lg btn-round" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-instagram"></i>
          </a>
          <a target="_blank" href="https://github.com/jemis67" class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip" data-original-title="Star on Github">
            <i class="fa fa-github"></i>
          </a>
        </div>
      </div>
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2019
            <a href="https://www.creative-tim.com" target="_blank">Jemis Goti</a>.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Core -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/popper/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="assets/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.0.1"></script>
</body>

</html>