<?php $this->load->view('admin/include/header');?>

<style type="text/css"> input:required:invalid, input:focus:invalid { background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAeVJREFUeNqkU01oE1EQ/mazSTdRmqSxLVSJVKU9RYoHD8WfHr16kh5EFA8eSy6hXrwUPBSKZ6E9V1CU4tGf0DZWDEQrGkhprRDbCvlpavan3ezu+LLSUnADLZnHwHvzmJlvvpkhZkY7IqFNaTuAfPhhP/8Uo87SGSaDsP27hgYM/lUpy6lHdqsAtM+BPfvqKp3ufYKwcgmWCug6oKmrrG3PoaqngWjdd/922hOBs5C/jJA6x7AiUt8VYVUAVQXXShfIqCYRMZO8/N1N+B8H1sOUwivpSUSVCJ2MAjtVwBAIdv+AQkHQqbOgc+fBvorjyQENDcch16/BtkQdAlC4E6jrYHGgGU18Io3gmhzJuwub6/fQJYNi/YBpCifhbDaAPXFvCBVxXbvfbNGFeN8DkjogWAd8DljV3KRutcEAeHMN/HXZ4p9bhncJHCyhNx52R0Kv/XNuQvYBnM+CP7xddXL5KaJw0TMAF8qjnMvegeK/SLHubhpKDKIrJDlvXoMX3y9xcSMZyBQ+tpyk5hzsa2Ns7LGdfWdbL6fZvHn92d7dgROH/730YBLtiZmEdGPkFnhX4kxmjVe2xgPfCtrRd6GHRtEh9zsL8xVe+pwSzj+OtwvletZZ/wLeKD71L+ZeHHWZ/gowABkp7AwwnEjFAAAAAElFTkSuQmCC'); background-position: right top; background-repeat: no-repeat; -moz-box-shadow: none; } input:required:valid { background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAepJREFUeNrEk79PFEEUx9/uDDd7v/AAQQnEQokmJCRGwc7/QeM/YGVxsZJQYI/EhCChICYmUJigNBSGzobQaI5SaYRw6imne0d2D/bYmZ3dGd+YQKEHYiyc5GUyb3Y+77vfeWNpreFfhvXfAWAAJtbKi7dff1rWK9vPHx3mThP2Iaipk5EzTg8Qmru38H7izmkFHAF4WH1R52654PR0Oamzj2dKxYt/Bbg1OPZuY3d9aU82VGem/5LtnJscLxWzfzRxaWNqWJP0XUadIbSzu5DuvUJpzq7sfYBKsP1GJeLB+PWpt8cCXm4+2+zLXx4guKiLXWA2Nc5ChOuacMEPv20FkT+dIawyenVi5VcAbcigWzXLeNiDRCdwId0LFm5IUMBIBgrp8wOEsFlfeCGm23/zoBZWn9a4C314A1nCoM1OAVccuGyCkPs/P+pIdVIOkG9pIh6YlyqCrwhRKD3GygK9PUBImIQQxRi4b2O+JcCLg8+e8NZiLVEygwCrWpYF0jQJziYU/ho2TUuCPTn8hHcQNuZy1/94sAMOzQHDeqaij7Cd8Dt8CatGhX3iWxgtFW/m29pnUjR7TSQcRCIAVW1FSr6KAVYdi+5Pj8yunviYHq7f72po3Y9dbi7CxzDO1+duzCXH9cEPAQYAhJELY/AqBtwAAAAASUVORK5CYII='); background-position: right top; background-repeat: no-repeat; } </style>

<section><div style="height: 0px;" class="scrollbar-vertical"><div class="scrollbar-button-start"></div><div class="scrollbar-track-piece"><div class="scrollbar-thumb" style="top: 0pt; height: 0px; display: none;"></div></div><div class="scrollbar-button-end"></div></div><div class="viewport">
                <header class="container_12 clearfix">
                    <div class="grid_12">
                        <h1>Edit Contact Us Page Details</h1>
                    </div>
                </header>
                <section class="container_12 clearfix">
                    <div class="portlet grid_12">
                        <header>
                            <h2>Edit Contact Us page details</h2>
                        </header>
                        <section>
                            <form action=""  class="form has-validation" method="post" enctype="multipart/form-data"> 
                            	<div class="clearfix">
                                   <h3 style="margin:5px 0px 15px 210px; color:#F00;"><?php if(isset($alert)){ echo $alert; } ?></h3>
                                </div>
                            
                              	<div class="clearfix">
                                    <label for="form-name" class="form-label">Name <em>*</em> </label>
                                	<div class="form-input"><input  value="<?php echo stripslashes($arr_view['contact_name']); ?>" id="form-name" name="name" required="required" type="text" style="width:100%; max-width:100%;"></div>
                                </div>
                                
                                
                              
                              <div class="clearfix">
                                    <label for="form-name" class="form-label">Contact Info <em>*</em> </label>
                                  <div class="form-input">
                                    <textarea name="contact_info" style="width:100%; max-width:100%; height:200px" ><?php echo stripslashes($arr_view['contact_info']); ?></textarea>
                                  </div>
                              </div>
                              
                              <div class="clearfix">
                                    <label for="form-name" class="form-label">Contact Tel (main) <em>*</em> </label>
                                  <div class="form-input"><input  value="<?php echo stripslashes($arr_view['contact_tel_main']); ?>" id="form-name" name="contact_tel_main" required="required" type="text" style="width:100%; max-width:100%;"></div>
                              </div>
                              
                              <div class="clearfix">
                                    <label for="form-name" class="form-label">Contact Tel <em>*</em> </label>
                                  <div class="form-input"><input  value="<?php echo stripslashes($arr_view['contact_tel']); ?>" id="form-name" name="contact_tel" required="required" type="text" style="width:100%; max-width:100%;"></div>
                              </div>
                              
                              <div class="clearfix">
                                    <label for="form-name" class="form-label">Contact Fax <em>*</em> </label>
                                  <div class="form-input"><input  value="<?php echo stripslashes($arr_view['contact_fax']); ?>" id="form-name" name="contact_fax" required="required" type="text" style="width:100%; max-width:100%;"></div>
                              </div>
                              
                              <div class="clearfix">
                                    <label for="form-name" class="form-label">Contact Email <em>*</em> </label>
                                  <div class="form-input"><input  value="<?php echo stripslashes($arr_view['contact_email']); ?>" id="form-name" name="contact_email" required="required" type="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" style="width:100%; max-width:100%;"></div>
                              </div>
                              
                              <div class="clearfix">
                                    <label for="form-name" class="form-label">Contact Web <em>*</em> </label>
                                  <div class="form-input"><input  value="<?php echo stripslashes($arr_view['contact_web']); ?>" id="form-name" name="contact_web" required="required" type="text"  style="width:100%; max-width:100%;"></div>
                              </div>
                              
                              
                                
                                
                                
                                
                           

                                

                                 

                                  
                                
                                <div class="form-action clearfix">
                                  <input type="submit" value="Save" name="save" class="buttonss" />
                                  <input type="reset"  class="button" value="Reset">
                                     <input type="button" value="Cancel" class="button" onclick="history.go(-1)" >
<input type="hidden" name="id" id="id" value="">
                              </div>

                          </form>
                        </section>
                    </div>
                    
                </section>
<?php $this->load->view('admin/include/footer');?>