<?php 
include './header.php';
require_once './db/projects.php';

$project_data = showProject($_GET["projectid"]);
$yamlFile = $project_data["yaml_file"];
$rating = $project_data["rating"];
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">

          </div>
        </div>
      </div>
    </section>

    <section class="content">
    <div style="text-align: right;">
    <input type="hidden" id="project_rating" value="<?php echo $rating; ?>">    
    <div id="rating">
      <span class="star" data-value="1">&#9733;</span>
      <span class="star" data-value="2">&#9733;</span>
      <span class="star" data-value="3">&#9733;</span>
      <span class="star" data-value="4">&#9733;</span>
      <span class="star" data-value="5">&#9733;</span>
        
    </div>
      <a href="files/outputs/<?php echo $yamlFile; ?>" download class="btn" style="color: #1B815F;"  name="btn_download" title="Download"><i class="fa fa-download"></i></a>
      <button type="button" class="btn" style="color: #1B815F;"  id="btn_save" title="Save"><i class="fa fa-save"></i></button>  
    </div>
    <p><b>Double click on the YAML contents to edit</b></p>

<pre><code class="language-yaml" contenteditable="true" id="yaml_content"><?php 
        if($yamlFile != "0"){
          $yamlContent = file_get_contents('files/outputs/' . $yamlFile);
          echo $yamlContent;
        }
        else{
          echo 'The output is currently being processed and is not ready yet. We will notify you when it is available.';
        }
?></code></pre>
    </section>

</div>

<script>
        document.getElementById('btn_save').addEventListener('click', function() {
            var codeContent = document.getElementById('yaml_content').textContent;
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "save_yaml.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert("File saved successfully!");
                }
            };
            xhr.send("content=" + encodeURIComponent(codeContent) + "&file=" + encodeURIComponent('<?php echo $yamlFile; ?>'));
        });


        document.addEventListener('DOMContentLoaded', function () {
        const stars = document.querySelectorAll('.star');
        setRating(document.getElementById('project_rating').value);

        stars.forEach(star => {
            star.addEventListener('click', function () {
                const ratingValue = this.getAttribute('data-value');
                setRating(ratingValue);
                saveRating(ratingValue);
            });
        });

        function setRating(value) {
            stars.forEach(star => {
                const starValue = star.getAttribute('data-value');
                if (starValue <= value) {
                    star.classList.add('selected');
                } else {
                    star.classList.remove('selected');
                }
            });
        }

        function saveRating(ratingValue) {
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'save_rating.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log('Rating saved successfully');
                }
            };
            xhr.send('id=<?php echo $_GET["projectid"]; ?>&rating=' + ratingValue);
        }
    });
</script>

<?php include './footer.php'?>