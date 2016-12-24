<html>
    <head>
        <?php $this->load->view('site/head');?>
    </head>
    <body>
	    <div class="wraper">
	           <div class="header">
	                 <?php $this->load->view('site/header')?>
	           </div>
	           <div id="container">
	                  <div class="left">
	                        <?php $this->load->view('site/left', $this->data);?>
	                  </div>
	                  
	                  <div class="content">
	                      <?php if(isset($message)):?>
	                      <h3 style="color:red"><?php echo $message?></h3>
	                      <?php endif;?>
	                      <?php $this->load->view($temp , $this->data);?>
	                  </div>   
	                 	       
	    </div>
	    
    </body>
</html>