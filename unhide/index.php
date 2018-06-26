
<!doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="style.css">
        <title>Biep-Boep</title>
    </head>
    <body onload="hideImage()">
        <div class="container">
          <h1 style="color: red;">unhide me</h1>
            <div id="unhiderow" class="row">
                <div class="col-md-4" style="padding-bottom: 40px">
                    <div style="height: 100px">
                        Image:<input type="file" id="stegimage"/><br>
                    </div>
                    <canvas style="border: solid 1px black" width="300" height="300" id="stegcanvas"></canvas>
                </div>

                <div class="col-md-4" style="padding-bottom: 40px">
                    <div style="height: 100px">
                        Hidden bits:
                        <span id="unhidebitsdisplay">1</span><div id="bits2" style="margin-top: 10px; width: 300px"></div>
                        <button class="btn btn-default" style="margin-top: 10px" id="downloadbutton2">Download Full-size Image</button>
                    </div>

                    <canvas style="border: solid 1px black" width="300" height="300" id="hiddencanvas"></canvas>

                </div>
            </div>

            <div class="modal" id="fullimgmodal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Save image</h4>
                        </div>
                        <div class="modal-body">
                            <span id="loadingspan"></span><br>
                            <img style="max-width: 100%" id="viewimg">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <a href="../P2_99dK/index.php"> << Go Back</a>



        <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script type="text/javascript" src="hideimage.js"></script>
    </body>
</html>
