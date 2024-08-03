<template>
    <img :src="imageUrl" height="60" alt="">
   <div class="h4 text-muted">
   </div>
</template>

<script>
export default {
  data() {
    return {
      imageUrl: '/storage/img/logo/logo.png',
    };
  },
};
</script>
