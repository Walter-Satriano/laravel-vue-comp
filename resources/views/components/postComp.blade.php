<script type="text/x-template" id="index-post-id">
  <div class="box-cont">
    @foreach ($posts as $post)
      <div class="box">
        <h2>{{ $post -> title}}</h2>
        <h4>{{ $post -> author}}</h4>
      </div>
    @endforeach
  </div>
</script>

<script type="text/javascript">
  Vue.component('post-dom-elem', {

    template: '#index-post-id',

  });
</script>
