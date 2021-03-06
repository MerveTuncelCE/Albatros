<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>AdminLTE 2 | Dashboard</title>

  <!-- Tell the browser to be responsive to screen width -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

  <!-- Mervenin ekledikleri-->
  <!-- Import google fonts - Heading first/ text second -->
  <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="dist/css/icons.css">
  <link rel="stylesheet" href="dist/css/main.css">
  <link rel="stylesheet" href="dist/css/plugins.css">
  <link rel="stylesheet" href="dist/css/custom.css">
  <link rel="stylesheet" href="dist/css/bootstrap.css">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- Calendar:)) -->
    <link rel="stylesheet" href="bower_components\fullcalendar\dist\fullcalendar.min.css">
    <link rel="stylesheet" href="bower_components\fullcalendar\dist\fullcalendar.css">
    <link rel="stylesheet" href="bower_components\fullcalendar\dist\fullcalendar.print.min.css" media="print">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>/albatros/
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">



<style>
.error {color: #FF0000; font-weight:bold;}
.bigfont {font-size: 20px;}
</style>


</head>
<body class="hold-transition skin-blue sidebar-mini">


  <div class="wrapper">

    <?php include 'header.php'; ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Yeni Öğrenci Ekle
          <small>...........</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fa fa-dashboard"></i>Ana Sayfa</a></li>
          <li><a href="index.php">Öğrenci</a></li>
          <li class="active">Ekle</li>
        </ol>
      </section>

      <!-- Main content class="col-md-3" style="font-size: 5px; font-weight: bold; font-family: Arial, Helvetica, sans-serif;"-->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">

                <!-- FORM -->

                <form id="addStudentForm" action="addNewStudent.php" method="post" enctype="multipart/form-data">

                  <!-- FORM -->

                  <div class="contentwrapper">

                    <!--Content wrapper-->

                    <div id="ContentPlaceHolder1_pnlgenel">

                      <div class="col-lg-16 ">

                        <div class="panel panel-default  toggle panelMove panelRefresh" id="supr0">
                          <!-- Start .panel -->
                          <div class="panel-heading">

                            <h4 class="panel-title">Öğrenci Bilgileri</h4>
                            <span class="error bigfont">
                              <?php if(isset($_SESSION["connection"]))
                              echo "Veritabanı Bağlantı Hatası";
                              echo $_SESSION["errorMessage"];
                              ?>
                              
                            </span>
                          </div>

                          <div class="panel-body pt0 pb0">

                            <div class="form-horizontal group-border stripped">

                              <!-- Start .form-group 1 -->
                              <div class="form-group">

                                <div class="row">
                                  <div>

                                    <label class="col-md-2 control-label" for="">Dönem Başlangıç Tarihi:</label>
                                  </div>
                                  <div class="col-md-3">

                                    <div class="input-group">
                                      <span class="error"><?php echo $_SESSION["donemBaslangicTarihi"]; ?></span>
                                      <input name="donemBaslangicTarihi" class="form-control" type="date" data-date-inline-picker="false" data-date-open-on-focus="true" />
                                    </div>
                                  </div>
                                  <label class="col-md-2 control-label" for="">Dönem Bitiş Tarihi:</label>

                                  <div class="col-md-3">

                                    <div class="input-group">
                                      <span class="error"><?php echo $_SESSION["donemBitisTarihi"]; ?></span>
                                      <input name="donemBitisTarihi" class="form-control"  type="date" data-date-inline-picker="false" data-date-open-on-focus="false"/>

                                    </div>

                                  </div>
                                </div>

                              </div>
                              <!-- End .form-group 1 -->

                              <!-- Start .form-group 2 -->
                              <div class="form-group">

                                <div class="row">

                                  <label class="col-md-2 control-label"><i class="renk">&nbsp;</i>Adı:</label>

                                  <div class="col-md-3">
                                    <input name="studentName" type="text" maxlength="64" id="ContentPlaceHolder1_txtAdi" class="form-control" placeholder="Öğrenci Adı">
                                    <span class="error">* <?php echo $_SESSION["nameErr"];?></span>

                                  </div>

                                  <label class="col-md-2 control-label"><i class="renk">&nbsp;</i>Soyadı:</label>
                                  <div class="col-md-3">
                                    <input name="studentSurname" type="text" maxlength="64" id="ContentPlaceHolder1_txtSoyadi" class="form-control" placeholder="Öğrenci Soyadı">
                                    <span class="error">* <?php echo $_SESSION["surNameErr"];?></span>

                                  </div>

                                </div>
                              </div>
                              <!-- End .form-group 2 -->

                              <!-- Start .form-group 3 -->
                              <div class="form-group">
                                <div class="row">

                                  <label class="col-md-2 control-label">Cinsiyet:</label>
                                  <div class="col-md-3">    
                                    <div class="fancy-select">
                                      <select name="gender" id="Cinsiyet" class="fancy-select form-control fancified" >
                                        <option value="Erkek">Erkek</option>
                                        <option value="Kız">Kız</option> 
                                      </select>
                                    </div> 

                                  </div>
                                  <label class="col-md-2 control-label">T.C. No:</label>
                                  <div class="col-md-3">

                                    <input name="TCNumber" type="text" maxlength="11" id="ContentPlaceHolder1_txtTC" class="form-control" placeholder="T.C. Kimlik No">
                                    <span class="error"><?php echo $_SESSION["TCNumberErr"];?></span>
                                  </div>                          
                                </div>
                              </div>

                              <!-- End .form-group 3 -->

                              <!-- Start .form-group 4 -->

                              <div class="form-group">
                                <div class="row">
                                  <label class="col-md-2 control-label">Sınıfı:</label>
                                  <div class="col-md-3">

                                    <input name="studentClass" type="text" maxlength="8" id="ContentPlaceHolder1_txtSinif" class="form-control" placeholder="Sınıfı">

                                  </div>
                                  <label class="col-md-2 control-label">Rapor No:</label>
                                  <div class="col-md-3">
                                    <input name="studentRapor" type="text" maxlength="16" id="ContentPlaceHolder1_txtRapor" class="form-control" placeholder="Rapor No">

                                  </div>

                                </div>
                              </div>
                              <!-- End .form-group 4 -->

                              <!-- Start .form-group 4 -->
                              <div class="form-group">
                                <div class="row">
                                  <label class="col-md-2 control-label" for="">Doğum Tarihi:</label>
                                  <div class="col-md-3">
                                    <div class=" input-group">
                                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                      <!-- <input name="birthDay" type="text" maxlength="10" id="ContentPlaceHolder1_txtDogumTarihi" class="form-control" placeholder="gg.AA.yyyy">-->
                                      <input name="studentBirthDay" class="form-control"  type="date" data-date-inline-picker="false" data-date-open-on-focus="false"/>
                                    </div>
                                  </div>

                                  <label class="col-md-2 control-label" for="">Kayıt Tarihi:</label>
                                  <div class="col-md-3">
                                    <div class=" input-group">

                                      <input name="registrationDate" type="text" value="<?php date_default_timezone_set("Europe/Istanbul");
                                      echo date("Y-m-d"); ?>" maxlength="10" id="registrationDate" class="form-control" placeholder="yyyy-aa-gg" disabled>

                                    </div> 
                                  </div>
                                </div>
                              </div>

                              <!-- End .form-group  -->   
                              <!-- End .form-group 4 -->

                              <!-- Start .form-group 5 -->

                              <!-- End .form-group 5 -->

                              <!---- FOTOĞRAF -->

                              <div class="form-group">
                                <label class="col-md-2 control-label" for="">Fotoğraf Seç:</label>
                                <div class="col-md-3">
                                  <span class="error">
                                    <?php 
                                    for($temp; $temp < 5;$temp++){
                                      if(!empty($_SESSION["fileErrors"][$temp]))
                                        echo $_SESSION["fileErrors"][$temp]." "; 
                                    }
                                    ?>
                                  </span>

                                  <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-info mr5 mb10">
                                </div>
                                <label class="col-md-2 control-label" for="">Ulaşım:</label>
                                <div class="col-md-3">

                                  <input name="transportation" type="text" maxlength="64" class="form-control" placeholder="Ulaşım">
                                </div>
                              </div>

                              <!---- FOTOĞRAF -->

                              <!-- Start .form-group 6 -->
                              <div class="form-group">
                                <label class="col-md-2 control-label" for="">Reh. Araş. Merkezi:</label>
                                <div class="col-md-3">

                                  <input name="rehberlikMerkezi" type="text" maxlength="64" id="ContentPlaceHolder1_txtMerkezi" class="form-control" placeholder="Rehberlik Araştırma Merkezi">

                                </div>

                                <label class="col-md-2 control-label"><i class="renk"><span class="error">*</span>&nbsp;</i>Eğitsel Tanı:</label>
                                <span class="error"><?php echo $_SESSION["educationalDiagnosisErr"]; ?></span>
                                <div class="col-md-4">

                                  <div class="form-group">

                                   <select id="framework" name="framework[]" multiple class="form-control" >
                                    <option value="Hafif Düzey Zihinsel Yetersizlik (HDZY)">Hafif D&#252;zey Zihinsel Yetersizlik (HDZY)</option>
                                    <option value="Orta Düzey Zihinsel Yetersizlik (ODZY)">Orta D&#252;zey Zihinsel Yetersizlik (ODZY)</option>
                                    <option value="Ağır Düzey Zihinsel Yetersizlik (ADZY)">Ağır D&#252;zey Zihinsel Yetersizlik (ADZY)</option>
                                    <option value="Çok Ağır Düzey Zihinsel Yetersizlik (CADZY)">&#199;ok Ağır D&#252;zey Zihinsel Yetersizlik (CADZY)</option>
                                    <option value="Bedensel Yetersizlik">Bedensel Yetersizlik</option>
                                    <option value="Görme Yetersizliği">G&#246;rme Yetersizliği</option>
                                    <option value="Duygusal Davranış Bozukluğu (DDB)">Duygusal Davranış Bozukluğu (DDB)</option>
                                    <option value="Yaygın Gelişimsel Bozukluk (OTİZM)">Yaygın Gelişimsel Bozukluk (OTİZM)</option>
                                    <option value="Özel Öğrenme Güçlüğü (ÖÖG)">&#214;zel &#214;ğrenme G&#252;&#231;l&#252;ğ&#252;(&#214;&#214;G)</option>
                                    <option value="Dikkat Eksikliği ve Hiperaktivite Bozukluğu (DEHB)">Dikkat Eksikliği ve Hiperaktivite Bozukluğu (DEHB)</option>
                                    <option value="Dil Konuşma Güçlüğü (DKG)">Dil Konuşma G&#252;&#231;l&#252;ğ&#252; (DKG)</option>
                                    <option value="Üstün Yetenekli Birey (ÜYB)">&#220;st&#252;n Yetenekli Birey (&#220;YB)</option>
                                    <option value="İşitme Yetersizliği">İşitme Yetersizliği</option>
                                    <option value="Normal">Normal</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <!-- End .form-group 6 -->

                          </div>
                        </div>
                      </div>
                      <!-- End .panel -->
                    </div>
                  </div>
                  <!-- End Of ContentPlaceHolder1_pnlgenel -->
                </div>

                <!-- End Of ContentWrapper -->

                <div class="col-lg-16">
                  <div class="panel panel-default toggle panelMove panelRefresh" id="supr1">
                    <!-- Start .panel -->
                    <div class="panel-heading">
                      <h4 class="panel-title">Veli Bilgileri</h4>
                    </div>

                    <div class="panel-body pt0 pb0">
                      <div class="form-horizontal group-border stripped">

                        <div class="form-group">
                          <div class="row">           
                            <label class="col-md-2 control-label" for=""><i class="renk">&nbsp;</i>Adı:</label>
                            <div class="col-md-3">
                              <input name="parentName" type="text" maxlength="64" id="parentName" class="form-control" placeholder="Velinin Adı">
                              <span class="error">* <?php echo $_SESSION["parentNameErr"]; ?></span>
                            </div>

                            <label class="col-md-2 control-label" for=""><i class="renk">&nbsp;</i>Soyadı:</label>
                            <div class="col-md-3">
                              <input name="parentSurname" type="text" maxlength="64" id="parentSurname" class="form-control" placeholder="Velinin Soyadı">
                              <span class="error">* <?php echo $_SESSION["parentSurnameErr"]; ?></span>
                            </div>
                          </div>
                        </div>
                        <!-- End .form-group  -->

                        <div class="form-group">
                          <div class="row">
                            <label class="col-md-2 control-label">T.C. No:</label>
                            <div class="col-md-3">
                              <input name="parentTCNumber" type="text" maxlength="11" id="parentTCNumber" class="form-control" placeholder="TC Kimlik No">
                              <span class="error"><?php echo $_SESSION["parentTCNumberErr"] ?></span>
                            </div>
                            <label class="col-md-2 control-label" for="">Yakınlık Derecesi:</label>
                            <div class="col-md-3">              
                              <div class="fancy-select">
                                <select name="parentYakinlik" id="Yakinlik" class="fancy-select form-control fancified">
                                  <option value="Anne">Anne</option>
                                  <option value="Baba">Baba</option>
                                  <option value="Diğer">Diğer</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                        </div>



                        <!-- End .form-group  -->

                        <div class="form-group">
                          <div class="row">

                            <label class="col-md-2 control-label">Sabit Telefon:</label>
                            <div class="col-md-3">
                              <input name="parentPhoneNumber" type="text" maxlength="11" id="SabitTel" class="form-control" placeholder="Sabit Telefon">
                              <span class="error"><?php echo $_SESSION["parentPhoneNumberErr"] ?></span>
                            </div>
                            <label class="col-md-2 control-label">Cep Telefonu:</label>
                            <div class="col-md-3">

                              <input name="parentMobilePhone" type="text" maxlength="11" id="CepTel" class="form-control" placeholder="Cep Telefonu">
                              <span class="error"><?php echo $_SESSION["parentMobilePhoneErr"] ?></span>
                            </div>

                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 control-label" for="">Email Adresi:</label>
                          <div class="col-md-8">
                            <input name="emailAdresi" type="text" maxlength="255" id="emailAdresi" class="form-control" placeholder="Email Adresi">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-2 control-label" for="">Ev Adresi:</label>
                          <div class="col-md-8">
                            <input name="evAdresi" type="text" maxlength="255" id="EvAdresi" class="form-control" placeholder="Ev Adresi">
                          </div>
                        </div>
                        <!-- End .form-group  -->

                        <div class="form-group">
                          <label class="col-md-2 control-label" for="">İş Adresi:</label>
                          <div class=" col-md-8">
                            <input name="parentIsAdresi" type="text" maxlength="255" id="IsAdresi" class="form-control" placeholder="İş Adresi">
                          </div>
                        </div>
                        <!-- End .form-group  -->
                        <div class="form-group">
                          <label class="col-md-2 control-label" for="">Açıklama:</label>
                          <div class="col-md-8">
                            <textarea name="Aciklama" rows="2" cols="20" id="Aciklama" class="form-control"></textarea>
                          </div>
                        </div>

                        <!-- End .form-group  -->
                      </div>

                      <!--<button type="submit" id="sub" class="btn btn-success mr5 mb10">Kaydet Button</button> -->
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">  
                            <input type="submit" id="sub" value="Kaydet" class="btn btn-success">  

                          </div>
                        </div>
                      </div> 

                    </div>
                    <span class="error">* ile işaretli alanların doldurulması zorunludur!</span> 

                    <!-- End of Panel -->

                  </div>
                  <!-- End of col-lg-16 -->
                </form>


              </div>

              <div class="control-sidebar-bg"></div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php include '/albatros/footer.php'; ?>
  </div> 


  <!-- ./wrapper -->


  <div>
    <!-- jQuery 3 -->

    <script>
      $(function () {

    /* initialize the external events
    -----------------------------------------------------------------*/
    function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    init_events($('#external-events div.external-event'))

    /* initialize the calendar
    -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
    m    = date.getMonth(),
    y    = date.getFullYear()
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week : 'week',
        day  : 'day'
      },
      //Random default events
      events    : [
      {
        title          : 'All Day Event',
        start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954' //red
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'http://google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
        ],
        editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject')

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)

        // assign it the date that was reported
        copiedEventObject.start           = date
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css('background-color')
        copiedEventObject.borderColor     = $(this).css('border-color')

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }

      }
    })

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })
</script>



</div>

























<?php 
session_unset(); ?>



</body>
</html>

<script>
  $(document).ready(function(){
   $('#framework').multiselect({
    nonSelectedText: 'Tanı Seç',
    enableFiltering: true,
    enableCaseInsensitiveFiltering: true,
    buttonWidth:'300px'
  });
 /*
 $('#framework_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#framework option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#framework').multiselect('refresh');
    alert(data);
   }
  });
 });
 */
 
});
</script>