<div class="col-xs-4 sidebar">


    <section>
        <h4>Archives</h4>
        <ol class="list-unstyled">
          @foreach ($archives as $stats)
            <li>
               <a href="/?month={{ $stats['month'] }}&year={{ $stats['year']}}">
                 {{ $stats['month']  . ' ' .  $stats['year'] }}
               </a>

            </li>

          @endforeach
        </ol>
    </section>

</div>

<style>
.sidebar{
    background-color:#eee;
    position: fixed;
    top: 0;
    bottom: 0;
    right: 0;
}
</style>
