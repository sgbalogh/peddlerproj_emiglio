<?php echo head(array(
  'title' => nl_getExhibitField('title'),
  'bodyclass' => 'neatline show'
)); ?>
 
<!-- Exhibit title: -->
<h1><?php echo nl_getExhibitField('title'); ?></h1>
 
<!-- "View Fullscreen" link: -->
<?php echo nl_getExhibitLink(
  null, 'fullscreen', __('View Fullscreen'), array('class' => 'nl-fullscreen')
); ?>
 
<!-- Exhibit and description : -->
<?php echo nl_getExhibitMarkup(); ?>
<?php echo nl_getNarrativeMarkup(); ?>

<div id="faceting">
      <div class="AdditionalCareers">Additional Careers</div>
  	  <div class="AntiSemiticRhetoric">Anti-Semitic Rhetoric</div>
  	  <div class="Bartering">Bartering</div>
  	  <div class="BusinessPractices">Business Practices</div>
  	  <div class="ConflictViolenceCommunal">Conflict/Violence -- Communal</div>
  	  <div class="ConflictViolencePersonal">Conflict/Violence -- Personal</div>
  	  <div class="ContextualResource">Contextual Resource</div>
  	  <div class="CulturalExchange">Cultural Exchange</div>
  	  <div class="Family">Family</div>
  	  <div class="LiteraryArtisticDepiction">Literary or Artistic Depiction</div>
  	  <div class="NonPeddlingBackground">Non-Peddling Background</div>
  	  <div class="PeddlingBackground">Peddling Background</div>
  	  <div class="ReligiousPractices">Religious Practices</div>
  	  <div class="RestrictionsCommerce">Restrictions on Trade/Commerce</div>
  	  <div class="Routes">Routes</div>
  	  <div class="Sponsor">Sponsor</div>
  	  <div class="SubsequentCommercialCareers">Subsequent Commercial Careers</div>
  	  <div class="SubsequentNonCommercial">Subsequent Non-Commercial Careers</div>
  	  <div class="Transportation">Transportation</div>
  	  <div class="VictimsOfCrime">Victims Of Crime</div>
  	  <div class="Wares">Wares</div>
<br>
	<div class="reset">Reset All Facets</div>
<br>
<div class="Book">Book</div>
  	  <div class="JournalArticle">Journal Article</div>
<div class="results"></div>

</div>
 
<?php echo foot(); ?>
