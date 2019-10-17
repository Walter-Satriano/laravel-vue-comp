<script type="text/x-template" id="show-post-id">
  <div class="box-cont">
    <div class="box">
      <h3>TITLE: {{ $post -> title}}</h3>
      <p>{{ $post -> desc }}</p>
      <h4>AUTHOR: {{ $post -> author}}</h4>
    </div>
  </div>
</script>

<script type="text/javascript">
  Vue.component('post-show-dom-elem', {

    template: '#show-post-id',

  });
</script>
