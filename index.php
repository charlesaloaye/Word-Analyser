<?php include"inc/header.php";?> 
<body ng-controller="myCtrl"> 
 <ion-content ng-controller="myCtrl"> 
  <ion-refresher pulling-text="Ai said pull to reload this page..." on-refresh="doRefresh()"> 
  </ion-refresher> 
  <ion-list> 
   <ion-item ng-repeat="item in items"></ion-item> 
  </ion-list> 
 </ion-content> 

 <ion-content  has-bouncing="true"> 
<div class="content">
<h1>Ai</h1>
<h3 class="text-muted"> <?php echo ucwords("awesome content analyser made simple");?> </h3>

<?php include"inc/validations.php";?>

<form action="" method="POST">

 <div class="form-group"> 
  <textarea name="word"  rows="5" class="form-control" placeholder="Input contents to analyse"></textarea>
   </div>
  <button name="analyse" ng-click="showLoader()" type="submit" class="button button-block button-calm">Analyse </button>   
  </form>
</ion-content>
  
 <script> 
   angular.module('ionicApp', ['ionic'])

   .controller('myCtrl',function($scope) {});
  
 </script>           
   </body>
 <footer>
   
 </footer>
    </html>     
        