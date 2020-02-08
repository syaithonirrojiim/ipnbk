<!DOCTYPE html>
<html>
<head>
    <title>Bermain Form Wizard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css">

    <!-- Include SmartWizard CSS -->
    <link href="css/smart_wizard.css" rel="stylesheet" type="text/css" />
  
    <!-- Optional SmartWizard theme -->
    <link href="css/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container">
        <br />
        <form action="#" id="myForm" role="form" method="post" accept-charset="utf-8">
                  
        <!-- SmartWizard html -->
        <div id="smartwizard">
            <ul>
                <li><a href="#step-1">Step 1<br /><small>Data Pribadi</small></a></li>
                <li><a href="#step-2">Step 2<br /><small>Data Kontak</small></a></li>
                <li><a href="#step-3">Step 3<br /><small>Data Pendidikan</small></a></li>
                <li><a href="#step-4">Step 4<br /><small>Data Pengalaman Kerja</small></a></li>
            </ul>
          
            <div>
                <div id="step-1">
                    <h2>Form Data Pribadi</h2>

                    <!-- isi dengan form sesuai kebutuhan -->
                  
                </div>
                <div id="step-2">
                    <h2>Form Data Kontak</h2>
                    <!-- isi dengan form sesuai kebutuhan -->
                </div>
                <div id="step-3">
                    <h2>Form Data Pribadi</h2>
                    <!-- isi dengan form sesuai kebutuhan -->
                </div>
                <div id="step-4" class="">
                    <h2>Form Data Pengalaman Kerja</h2>
                    <!-- isi dengan form sesuai kebutuhan -->
                </div>
            </div>
        </div>
      
        </form>
      
    </div>
  
    <!-- Include jQuery -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <!-- Include jQuery Validator plugin -->
    <script src="js/bootstrap.js"></script>

    <script src="js/jquery.smartWizard.js"></script>
  

    <script type="text/javascript">
        $(document).ready(function(){
          
            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Finish')
                                            .attr('id','btn-finish')
                                             .addClass('btn btn-info')
                                             .on('click', function(){
                                                  
                                                });
            var btnCancel = $('<button></button>').text('Cancel')
                                             .addClass('btn btn-danger')
                                             .on('click', function(){
                                                    $('#smartwizard').smartWizard("reset");
                                                });                        
          
          
          
            // Smart Wizard
            $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'dots',
                    transitionEffect:'fade',
                    toolbarSettings: {toolbarPosition: 'bottom',
                                      toolbarExtraButtons: [btnFinish, btnCancel]
                                    },
                    anchorSettings: {
                                markDoneStep: true, // add done css
                                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                            }
                 });
          
            $("#btn-finish").addClass('disabled');
             $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
                   //alert("You are on step "+stepNumber+" now");
                   if(stepPosition == 'first'){
                       $("#prev-btn").addClass('disabled');
                       $("#btn-finish").addClass('disabled');
                   }else if(stepPosition == 'final'){
                       $("#next-btn").addClass('disabled');
                       $("#btn-finish").removeClass('disabled');
                   }else{
                       $("#prev-btn").removeClass('disabled');
                       $("#next-btn").removeClass('disabled');
                       $("#btn-finish").addClass('disabled');
                   }
                });                              
          
        });  
    </script>
</body>
</html>