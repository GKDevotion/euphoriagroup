<style>
      .sticky-social {
            position: fixed;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 4px;
            padding: 0 0 0 4px;
            z-index: 1000;
        }

        .sticky-social a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #fff;
            background-color: var(--euphoria-blue);
            padding: 8px;
            transition: all 0.3s ease;
            width: 45px; /* Initial width */
            overflow: hidden;
            white-space: nowrap;
        }

        .sticky-social a i {
            font-size: 1rem;
            min-width: 30px;
            text-align: center;
            margin-right: 10px;
        }

        .sticky-social a img{
            width: 30px;
        }

        .sticky-social a span{
            margin-left: 10px;
        }
        .social-name {
            opacity: 0;
            transition: opacity 0.3s ease;
            margin-left: 10px;
        }

        /* Hover Effect: Expand to show name */
        .sticky-social a:hover {
            width: auto; /* Expand width on hover */
            background-color: var(--euphoria-red); /* Change background on hover */
            color: white;
        }

        .sticky-social a:hover .social-name {
            opacity: 1;
        }

    @media (max-width: 767px) {
        .sticky-social {
            display: none !important;
        }
    }
</style>

<!-- Start Sticky Nav -->
<div class="sticky-social">

    <?php
        foreach( $sideStickyMenu as $val ){
            ?>
            <a href="#<?= $val['url']; ?>">
                <img src="<?php echo $val['img']; ?>" alt="<?= $val['title']; ?>">
                <span><?= $val['title']; ?> </span>
            </a>
            <?php
        }
    ?>
</div>