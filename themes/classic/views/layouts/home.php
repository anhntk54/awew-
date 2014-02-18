<!DOCTYPE html>
<html dir="ltr">
<!--HEAD-->
<?php $this->widget('application.components.Head');?>
<!--END HEAD-->
    <body>
        <!-- Open layout -->
        <div class="site-layout">
        
            <!-- DEMO Style Switcher -->
            <?php $this->widget('application.components.Boxed');?>
        
            <!-- Header group -->
            <?php $this->widget('application.components.Container');?>
            
            <!-- Main content -->
            <div class="container"> <!-- Primary content -->
                <?php echo $content;?>
                <!-- Sidebar -->
                <?php $this->widget('application.components.Sidebar');?>
                <!-- End Sidebar-->
            </div>
            
            <!-- Footer -->
            <?php $this->widget('application.components.Footer');?>
            
            <!-- Copyright -->
            <?php $this->widget('application.components.Copyright');?>
        
        <!-- Closed layout -->
        </div>
    </body>
</html>