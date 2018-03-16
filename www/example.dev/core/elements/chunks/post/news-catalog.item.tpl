<div class="news__item">
    <div class="news__card">
        <div class="news__image">
            <img src="{$image | phpthumbon : 'w=236&h=133&zc=1'}" />
        </div>

        <div class="news__box">
            <div class="news__date">
                {$publishedon | date : "d.m.Y"}
            </div>
            <div class="news__header">
                <a href="{$id | url}">{$pagetitle}</a>
            </div>
            <div class="news__text">
                <p>{$introtext | notags}</p>
            </div>
        </div>
    </div>
</div>