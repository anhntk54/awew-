<!-- Main content -->
<div class="container"> <!-- Content -->
    <div id="primary-left">
        <!-- Post -->
        <article class="entry-post"> 
            <!--Slide show-->
            <?php $this->widget('Home.components.View_SlideShow',array('model'=>$model));?>
            <!--End slide show-->
            <!--Rating-->
            <?php $this->widget('Home.components.View_Rating',array('model'=>$model));?>
            <!--End rating-->
            <h3 class="entry-title"><?php echo $model->title;?></h3>
            <ul class="entry-meta">
                <li class="posted-date"><?php echo Articles::model()->getDate($model);?></li>
                <li class="posted-comments"><a href="#">23 Comments</a></li>
            </ul>
            <div class="entry-content">
                <?php if($model->short_description != ''):?>
                    <p><?php echo $model->short_description;?></p>
                <?php endif;?>
                <?php echo $model->description;?>
			</div>
        </article>
        
        <?php $this->widget('Home.components.View_SubmitRating',array('model'=>$model));?>
        <?php $this->widget('Home.components.View_Comment',array('model'=>$model));?>
    </div>
    
    <!-- Sidebar -->
    <div id="sidebar">
        <!-- Search widget -->
        <aside class="widget">
        	<form class="search-form">
            	<input type="text" placeholder="Search...">
            	<input type="submit">
            </form>
        </aside>
        <!-- Subscribe widget -->
        <aside class="widget">
        	<h4 class="widget-title">Subscribe widget</h4>
        	<ul class="subscribe">
            	<li class="rss"><a href="#">Subscribe to our RSS Feed</a></li>
                <li class="twitter"><a href="#">We have 198 followers</a></li>
                <li class="facebook"><a href="#">Like us on Facebook</a></li>
            </ul>
        </aside>
        <!-- Category widget -->
        <aside class="widget">
        	<h4 class="widget-title">Blog category</h4>
        	<ul class="category">
            	<li><a href="#">Vestibulum pretium</a></li>
                <li><a href="#">Lectus</a></li>
                <li><a href="#">Ritae malesuada</a></li>
                <li><a href="#">Tortor massa</a></li>
                <li><a href="#">Suspendisse</a></li>
            </ul>
        </aside>
        <!-- Calendar widget -->
        <aside class="widget">
        	<h4 class="widget-title">Calendar widget</h4>
                <div id="calendar_wrap">
                  <table id="wp-calendar">
                    <caption>April 2013</caption>
                    <thead>
                      <tr>
                        <th scope="col" title="Monday">M</th>
                        <th scope="col" title="Tuesday">T</th>
                        <th scope="col" title="Wednesday">W</th>
                        <th scope="col" title="Thursday">T</th>
                        <th scope="col" title="Friday">F</th>
                        <th scope="col" title="Saturday">S</th>
                        <th scope="col" title="Sunday">S</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <td colspan="3" id="prev" class="pad">&nbsp;</td>
                        <td class="pad">&nbsp;</td>
                        <td colspan="3" id="next" class="pad">&nbsp;</td>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                      </tr>
                      <tr>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                        <td>19</td>
                        <td>20</td>
                        <td>21</td>
                      </tr>
                      <tr>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                        <td>25</td>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                      </tr>
                      <tr>
                        <td>29</td>
                        <td>30</td>
                        <td class="pad" colspan="5">&nbsp;</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
        </aside>
        <!-- Text widget -->
        <aside class="widget">
        	<h4 class="widget-title">Text widget</h4>
        	<p>Sed non tortor massa, vitae malesuada ipsum. Vestibulum pretium lectus id augue cursus venenatis. Suspendisse consectetur.</p>
        </aside>
        <!-- Latest post widget -->
		<aside class="widget">
       	<h4 class="widget-title">Latest posts</h4>
			<ul class="latest-posts">
                <li>
                	<a href="#"><img src="images/smallpost1.jpg" alt="Image"></a>
                    <div class="meta">
                        <h5><a href="#">Qui no atomorum</a></h5>
                        <small>05 Apr, 2013</small>
                    </div>
                </li>
                <li>
                	<a href="#"><img src="images/smallpost2.jpg" alt="Image"></a>
                    <div class="meta">
                        <h5><a href="#">Qui no atomorum</a></h5>
                        <small>05 Apr, 2013</small>
                    </div>
                </li>
                <li>
                	<a href="#"><img src="images/smallpost3.jpg" alt="Image"></a>
                    <div class="meta">
                        <h5><a href="#">Qui no atomorum</a></h5>
                        <small>05 Apr, 2013</small>
                    </div>
                </li>
			</ul>
        </aside>
        <!-- Tags widget -->
        <aside class="widget">
        	<h4 class="widget-title">Tags widget</h4>
        	<ul class="tags">
            	<li><a href="#">venenatis</a></li>
                <li><a href="#">neque</a></li>
                <li><a href="#">scelerisque</a></li>
                <li><a href="#">enim</a></li>
                <li><a href="#">felis</a></li>
                <li><a href="#">auctor</a></li>
                <li><a href="#">bibendum</a></li>
            </ul>
        </aside>
        <!-- Latest comments widget -->
		<aside class="widget">
       	<h4 class="widget-title">Latest comments</h4>
			<ul class="latest-comments">
                <li>
                	<a href="#"><img src="images/Author.jpg" alt="Post"></a>
                    <div class="meta">
                        <h5><a href="#">Qui no atomorum</a></h5>
                        <small>Joel Router</small>
                    </div>
                </li>
                <li>
                	<a href="#"><img src="images/Author.jpg" alt="Post"></a>
                    <div class="meta">
                        <h5><a href="#">Qui no atomorum</a></h5>
                        <small>Smith Modem</small>
                    </div>
                </li>
                <li>
                	<a href="#"><img src="images/Author.jpg" alt="Post"></a>
                    <div class="meta">
                        <h5><a href="#">Qui no atomorum</a></h5>
                        <small>John Doe</small>
                    </div>
                </li>
			</ul>
        </aside>
        <!-- Banner widget -->
		<aside class="widget">
       	<h4 class="widget-title">Sponsored links</h4>
       	  <div class="sponsored-links">
           	  <div><img src="images/banner1.jpg" alt="Image"></div>
              <div><img src="images/banner1.jpg" alt="Image"></div>
          </div>
        </aside>
    </div>

</div>