<script type="text/x-template" id="index-post-id">
  <div class="box-cont">
    @foreach ($posts as $post)
      <div class="box">
        <h3>TITLE: {{ $post -> title}}</h3>
        <p>
          <a href="{{ route('post.show', $post -> id) }}">SHOW POST</a>
        </p>
      </div>
    @endforeach
  </div>
</script>

<script type="text/javascript">
  Vue.component('post-index-dom-elem', {

    template: '#index-post-id',

  });
</script>
