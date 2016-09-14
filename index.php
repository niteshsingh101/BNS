<?php include("include/header.php");?>

<div class="art-header">
        <div class="art-header-position">
            <div class="art-header-wrapper">
                <div class="cleared reset-box"></div>
                <div class="art-header-inner">
                <div class="art-logo" ng-controller="Logoctrl">
                                 <h1 class="art-logo-name"><a href="#">{{headline}}</a></h1>
                                                 <h2 class="art-logo-text">{{slogan}}</h2>
                                </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="cleared reset-box"></div>
    <div ng-controller="Myctrl" ng-view></div>
    <div class="cleared"></div>
    
    <div class="cleared"></div>
</div>

<script>var app= angular.module('Myapp', ["ngRoute"]);</script>
<script src="javascript/config.js"></script>
<script src="javascript/about.js"></script>
<script src="javascript/route.js"></script>
<script src="javascript/controllers.js"></script>

</body>
</html>
