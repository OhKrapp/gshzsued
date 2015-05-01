<?php
    kirbytext::$tags['lightbox'] = array (
    'attr' => array (
      'group', 'display', 'badge'
    ),
    'html' => function($tag) {
        $name = $tag->attr('lightbox');
        $image = ($tag->page()->url()).'/'.$name;
        $group = $tag->attr('group', "default");
        $display = $tag->attr('display', "inline");
        $badge = $tag->attr('badge', "");
          return '<a href="' . $image . '" data-featherlight="image" style="display: ' 
          . $display . '; position: relative;" rel="' . $group . '" title="' . $name . '"><img src="' . $image . '" alt="' . $name . '" />' . $badge . '</a>';
      }
    );
    ?>