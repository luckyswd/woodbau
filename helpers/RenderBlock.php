<?php

class RenderBlock
{
    public static function renderBlockByName($name): void
    {
        $content = get_the_content();
        $blocks = parse_blocks( $content );

        if (!empty($blocks)) {
            foreach ($blocks as $block) {
                if ($block['blockName'] == $name) {
                    echo render_block($block);
                }
            }
        }
    }
}