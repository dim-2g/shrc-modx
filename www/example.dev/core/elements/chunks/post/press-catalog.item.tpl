<div class="news__item">
    <div class="news__card">
        <div class="news__box">
            <div class="news__date">
                {$publishedon | date : "d.m.Y"}
            </div>
            <div class="news__header">
                <a href="{$id | url}">{$pagetitle}</a>
            </div>
            <div class="news__text">
                <p>{$introtext | notags | truncate : 200 : '...'}</p>
            </div>
        </div>
    </div>
</div>