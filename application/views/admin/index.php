<style type="text/css">
	body { 
		padding-top: 50px; 
	}
	.breadcrumb{
		padding-top: 15px;
	}
    #text-middle {
        text-align: center;
    }
	
</style>
</head>
<body class="skin-blue">

     

        <header class="header">
            <!-- <h1>你好，世界！</h1> -->
            <!-- top Bar Start-->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">实验班出题系统</a>
			      
                  <!-- <p class="navbar-text">功能-></p> -->
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			      <ul class="nav navbar-nav">
			      </ul>

			
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="#" ><i class="glyphicon glyphicon-user"><span>username</span></i></a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">设置 <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><a href="#">注销</a></li>
			            <li><a href="#">修改资料</a></li>
			            <!-- <li><a href="#">Something else here</a></li> -->
			            <li class="divider"></li>
			            <li><a href="#">关于出题系统</a></li>
			          </ul>
			        </li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav><!--top bar end-->
		</header>

		




	    <div class="wrap">

			    <div class="panel panel-info col-sm-2 col-lg-2">
			        
				    <div class="panel-body">
			        
							            <div class="sidebar-nav">
							                <div class="nav-canvas">
							                    <ul class="nav nav-pills nav-stacked main-menu">
							                        <li class="nav-header">
							                           首页
							                        </li>
							                        <li>
							                            <a class="ajax-link" href="<?php echo site_url('admin/pannel_form/index');?>" target="main-content">
							                                <i class="glyphicon glyphicon-home"></i><span> 首页</span>
							                            </a>
							                        </li>
							                    </ul>

							                    <ul class="nav nav-pills nav-stacked main-menu">
							                        <li class="nav-header">
							                           操作
							                        </li>
							                        <li>
							                            <a class="ajax-link" href="<?php echo site_url('admin/pannel_form/form_add');?>" target="main-content">
							                                <i class="glyphicon glyphicon-plus"></i><span> 增加问卷</span>
							                            </a>
							                        </li>
							                        <li>
							                            <a class="ajax-link" href="<?php echo site_url('admin/pannel_form/form_list');?>" target="main-content">
							                                <i class="glyphicon glyphicon-list"></i><span> 问卷列表</span>
							                            </a>
							                        </li>
							                        
							                    </ul>
							                    <ul class="nav nav-pills nav-stacked main-menu">
							                        <li class="nav-header">
							                           用户
							                        </li>
							                        <li>
							                            <a class="ajax-link" href="<?php echo site_url('admin/pannel_form/');?>" target="main-content">
							                                <i class="glyphicon glyphicon-user"></i><span> 用户列表</span>
							                            </a>
							                        </li>
							                        <li>
							                            <a class="ajax-link" href="<?php echo site_url('admin/pannel_form/');?>" target="main-content">
							                                <i class="glyphicon glyphicon-info-sign"></i><span> 答题详情</span>
							                            </a>
							                        </li>
							                        
							                    </ul>
							                    <ul>
							                    	
							                    </ul>


							                </div>
							            </div>
							        <!-- </div> -->
							    <!--/span-->
				                <!-- left menu ends -->

				        <!-- </section> -->
				    </div>
				</div>
		    <!-- </div> -->

            <!-- <div class="col-sm-10 col-lg-10">    -->
	            <div class="panel panel-info col-sm-10 col-lg-10">
				    <div class="panel-body">
			            <div class="row" >
			                <div>
				                <iframe src="<?php echo site_url('admin/pannel_form');?>" name="main-content" 
				                 width="100%" height="670px" id="main-content" scrolling="auto" frameborder="0">
				                </iframe>
			                </div>
			            </div>
		            </div>
		        </div>
		    <!-- </div> -->
        </div><!--./wrapper-->
        <script type="text/javascript">
	            function iframe_fix() {
	            var height = $(window).height() - $("body > .header").height();
	            var iframe_height = height - $('.content-header').outerHeight();
	            $('#main-content').outerHeight(iframe_height-40-5);
	        }

        </script>


















