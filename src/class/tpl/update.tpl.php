<!DOCTYPE html>
<html>
  <head>
    <?php FeedPage::includesTpl(); ?>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
          <?php FeedPage::statusTpl(); ?>
          <?php FeedPage::navTpl(); ?>
          <div class="container-fluid">
            <div class="row-fluid">
              <div class="span6 offset3">
                <ul class="unstyled">
                  <?php $kf->updateFeedsHash($feedsHash, $forceUpdate, 'html')?>
                </ul>
                <a class="btn" href="?">Go home</a>
                <?php if (!empty($referer)) { ?>
                <a class="btn" href="<?php echo htmlspecialchars($referer); ?>">Go back</a>
                <?php } ?>
                <a class="btn" href="<?php echo $query."update=".$currentHash."&force"; ?>">Force update</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      <?php /* include("inc/script.js"); */ ?>
    </script>
  </body>
</html>
