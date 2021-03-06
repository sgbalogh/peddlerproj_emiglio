
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

<!-- <div id="faceting">
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
</div>-->

<div class="btn-group" data-toggle="buttons">
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="AdditionalCareers"> Additional Careers
  </label>
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="AntiSemiticRhetoric"> Anti-Semitic Rhetoric
  </label>
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="BusinessPractices"> Business Practices
  </label>
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="ConflictViolenceCommunal"> Conflict/Violence -- Communal
  </label>
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="ConflictViolencePersonal"> Conflict/Violence -- Personal
  </label>
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="ContextualResource"> Contextual Resource
  </label>
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="CulturalExchange"> Cultural Exchange
  </label>
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="Family"> Family
  </label>
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="LiteraryArtisticDepiction"> Literary or Artistic Depiction
  </label>
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="NonPeddlingBackground"> Non-Peddling Background
  </label>
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="PeddlingBackground"> Peddling Background
  </label>
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="ReligiousPractices"> Religious Practices
  </label>
   <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="RestrictionsCommerce"> Restrictions on Commerce/Trade
  </label>
   <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="Routes"> Routes
  </label>
   <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="Sponsor"> Sponsor
  </label>
   <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="SubsequentCommercialCareers"> Subsequent Commercial Careers
  </label>
   <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="SubsequentNonCommercial"> Subsequent Non-Commercial Careers
  </label>
   <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="Transportation"> Transportation
  </label>
     <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="VictimsOfCrime"> Victims Of Crime
  </label>
    <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="Wares"> Wares
  </label>
  </div>
  <div class="btn-group" data-toggle="buttons">
   <label class="btn btn-warning btn-xs">
    <input type="checkbox" name="tag" value="Books"> Books
  </label>
   <label class="btn btn-warning btn-xs">
    <input type="checkbox" name="tag" value="JournalArticle"> Journal Articles
  </label>
</div>
 
<?php echo foot(); ?>
