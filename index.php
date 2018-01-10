<?php
	$pagename = "Dashboard";
	include('files/head.php');

?>			

<div class="container">
				<div class="row featurette">
				<div class="col-md-7">
					<h2 class="featurette-heading">Data collection for Data Mining. <span class="text-muted">How we use this data?</span></h2>
					<p class="lead">We can collect data from this system and then association rule mining are used to identify the various circumstances that are associated with the occurrence of an accident for both the entire data set (EDS) and the clusters identified by K-modes clustering algorithm. The findings of cluster based analysis and entire data set analysis are then compared. The results reveal that the combination of k mode clustering and association rule mining is very inspiring as it produces important information that would remain hidden if no segmentation has been performed prior to generate association rules. Further a trend analysis have also been performed for each clusters and EDS accidents which finds different trends in different cluster whereas a positive trend is shown by EDS. Trend analysis also shows that prior segmentation of accident data is very important before analysis.</p>
				</div>
				<div class="col-md-5">
					<img src="images/b.png" class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
				</div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-7 order-md-2">
					<h2 class="featurette-heading">Accident Data Collection Can help. <span class="text-muted">But how?</span></h2>
					<p class="lead">One of the key objectives in accident data analysis to identify the main factors associated with a road and traffic accident. However, heterogeneous nature of road accident data makes the analysis task difficult. Data segmentation has been used widely to overcome this heterogeneity of the accident data.</p>
					<p class="lead">Through this system we can track all accidents in different areas and after a year this data is helpfull to analyse road accidents and reasons.</p>
				</div>
				<div class="col-md-5 order-md-1">
					<img src="images/a.png" class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
				</div>
			</div>


			<hr class="featurette-divider">

			<!-- /END THE FEATURETTES -->

</div>


<?php
	include('files/footer.php');
?>			
