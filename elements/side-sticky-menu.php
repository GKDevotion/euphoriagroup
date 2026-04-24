<style>
    .sticky-social {
        position: fixed;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        gap: 1px;
        z-index: 9999;
    }

    .sticky-social a {
        position: relative;
        display: flex;
        align-items: center;
        gap: 14px;
        width: 162px;
        padding: 5px 14px;
        font-size: 13px;
        font-weight: 600;
        border-bottom: 1px solid #666666;
        color: #fff;
        text-decoration: none;
        background: var(--euphoria-blue);
        white-space: normal;
        letter-spacing: 0.3px;
        transform: translateX(118px);
        transition: transform 0.35s ease-in-out, background 0.2s ease;
    }

    /* Red left-edge peek strip */
    .sticky-social a::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 4px;
        background: var(--euphoria-red);
        flex-shrink: 0;
    }

    .sticky-social a:first-child {
        border-radius: 6px 0 0 0;
    }

    .sticky-social a:last-child {
        border-radius: 0 0 0 6px;
    }

    .sticky-social a i {
        font-size: 14px;
        flex-shrink: 0;
        width: 16px;
        text-align: center;
    }

    /* Hover: slide fully in */
    .sticky-social a:hover {
        transform: translateX(0);
        background: var(--euphoria-red);
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
                <i class="bi bi-airplane-fill"></i>
                <?= $val['title']; ?> 
            </a>
            <?php
        }
    ?>
</div>