<!-- File: /app/View/Posts/index.ctp -->

<h1>NBA Highlights</h1>

<div class="row-fluid">
    <?php foreach ($videos as $video): ?>
        <div class="span4">
          <?php echo $video['Video']['id']; ?> | 
          <?php echo $this->Html->link($video['Video']['title'],
array('controller' => 'videos', 'action' => 'view', $video['Video']['id'])); ?> |
          <?php echo $video['Video']['created']; ?></td>
        </div>
    <?php endforeach; ?>
    <?php unset($video); ?>
</div>
