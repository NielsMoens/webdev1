 <h2><?= $current_page->title;?></h2>
<div class="content">
    <?= $current_page->content; ?>
    <div class="projects">


    <?php
        $files =scandir('projects/', SCANDIR_SORT_ASCENDING);

        foreach ($files as $item){
            // to filter out the . and .. in the folder structure
            if (is_file('projects/' . $item )){
                echo '<img src="projects/'. $item .'">';
            }

        }
    ?>
    </div>
</div>