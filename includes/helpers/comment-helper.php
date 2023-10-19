<?php
if( ! function_exists( 'sleek_block_comments' ) ):
function sleek_block_comments($comment, $args, $depth) {
    ?>
<article class="<?php comment_class(); ?> card bg-light" id="li-comment-<?php comment_ID() ?>">
      <header class="card-header border-0 bg-transparent d-flex align-items-center comment">
        <div>
            <div class="d-none d-sm-block">
              <?php echo get_avatar($comment,$size='80',
              $default='http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g' 
              ); 
              ?>
            </div>
          </div>
        <?php if ($comment->comment_approved == '0') : ?>
                    <em><?php esc_html_e('Your comment is awaiting moderation.','CleanAlien') ?></em>
                    <br />
                <?php endif; ?>
            <a class="fw-semibold text-decoration-none"><?php echo get_comment_author() ?>
            </a>
            <span class="ms-3 small text-muted"><?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s' , 'CleanAlien'), get_comment_date(),  get_comment_time()) ?>
            </span>
        </div>
        <div class="dropdown ms-auto">
        <button class="btn btn-link text-decoration-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-three-dots-vertical"></i>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Report</a></li>
        </ul>
      </div>
      </header>
      <div class="card-body py-2 px-3">
        <p> <?php comment_text() ?></p>
      </div>
      <footer class="card-footer bg-white border-0 py-1 px-3">
        <button
          type="button"
          class="btn btn-link btn-sm text-decoration-none ps-0"
        >
          <i class="bi bi-hand-thumbs-up me-1"></i>(3)
        </button>
        <button type="button" class="btn btn-link btn-sm text-decoration-none">
          Reply
        </button>
        </footer>
    </article>
    <aside>
      <button
        type="button"
        class="btn btn-link btn-sm text-decoration-none ms-2 my-2"
      >
        4 replies
      </button>

      <?php
        }
endif;