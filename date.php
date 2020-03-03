<?php
require "config.php";
if(isset($_POST['submit'])){

    $date = $_POST['date'];

    $sql = "INSERT INTO `datedisable`(`Date`) VALUES ('".$date."')";
    $res = mysqli_query($con, $sql);
    if($res){
        echo "successful";
    } 

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Datetimepicker Disable Dates Dynamically - nicesnippets.com</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
</head>
<body style="background:#e2e2e2;">
<div class="container">
    <div class="row">
        <form method="POST">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" name="date" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
            <div><button type="submit" name="submit"> ADD</button></div>
        </div>
    </form>
    </div>
</div>
<?php 
 // $b=1;
$sql = "SELECT * FROM datedisable Where id";
$result = $con->query($sql);
$arr_users = [];
if ($result->num_rows > 0) 
{
$arr_users = $result->fetch_all(MYSQLI_ASSOC);
// var_dump($arr_users);
// die();
}
?>
<?php 
if(!empty($arr_users)) { 
    ?>
<?php
 // foreach($arr_users as $user) { 
    ?>

<!-- <script type="text/javascript">
    $(function () {
            // var disabledDates;
            // var i;
          var disabledDate = ['<?php echo json_encode($user['Date']);?>'];
          // alert(disabledDate);
          /*for (var i=0; i<disabledDate.length;i++){
            alert(disabledDate[i]);*/
        $('#datetimepicker1').datetimepicker({
           // minDate:new Date(),
           disabledDates:disabledDate
        });
    // }
    });
</script> -->
<!-- <script type="text/javascript">
    
    $( document ).ready(function() {
        $(datetimepicker1).click(function(datetimepicker){
            var disabledDate = ['<?php echo json_encode($user['Date']);?>'];
           for (var i=0; i<disabledDate.length;i++){
            alert(disabledDate[i]);
            // $('#datetimepicker1').datetimepicker({
            disabledDates: disabledDate

                // });
            }     
        });
});
</script> -->
<!-- <script type="text/javascript">
    $(function () {
    var disabledDate = ['<?php echo json_encode($user['Date']);?>'];
    $.each(disabledDate, function (i, elem) {
    // do your stuff
    alert("disableDate"+elem);

    // function disabledates(date){
    //     var string = jquery.datepicker.formatdate('dd/mm/yy',date);
    //     return [dates.indexOf(string) == -1];
    // }
    // $(function(){
        $('#datetimepicker1').datetimepicker({
            disabledDates:disabledDate
        // });
        });
    // });

    });
</script> -->
<script type="text/javascript">
    $(function () {

        var disableDatesArray = [];
        <?php if(!empty($arr_users)) { ?>
        <?php foreach($arr_users as $user) {?>
          var disabledDate = ['<?php echo json_encode($user['Date']);?>'];
          var formattedDate = disabledDate.toString().substring(1, 11);
          alert("++"+formattedDate+"++");
          disableDatesArray.push(formattedDate);
            <?php } } ?>

        $('#datetimepicker1').datetimepicker({

           disabledDates:disableDatesArray
        });
    });
</script>
 <?php 
 // $b++; 
// }
}
 ?>

 <table class="table table-hover" id="userlist">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Sr.NO.</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                     $b=1;
                                    $sql = "SELECT * FROM datedisable Where id";
                                    $result = $con->query($sql);
                                    $arr_users = [];
                                    if ($result->num_rows > 0) 
                                    {
                                    $arr_users = $result->fetch_all(MYSQLI_ASSOC);
                                    }
                                    ?>
                                    <?php if(!empty($arr_users)) { ?>
                                    <?php foreach($arr_users as $user) { ?>

                                    <tr class="text-center">
                                        <td><b><?php echo "$b"; ?></b></td>
                                        <td><?php echo $user['Date']; ?></td>
                                        <?php $b++ ?>
                                                </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
</body>
</html>