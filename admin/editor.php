<div class="col-lg-8">
	<?php
	if(isset($_GET['content_page']))
	{	
		include($_GET['content_page'].'.php');
	}
	?>
</div>

<?php
if(isset($_REQUEST['content_page']))
{
	if($_REQUEST['content_page']=='edit_information')
	{
	
	}
	else
	{
?>
<script src='tools/editor/jquery.tinymce.min.js'></script>
<script src='tools/editor/tinymce.min.js'></script>	
  <script>
  tinymce.init({
  selector: 'textarea',
  height: 300,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools'
  ],
  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    'https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    'https://www.tinymce.com/css/codepen.min.css'
  ]
 });
 </script>
<?php
	}
}
?>