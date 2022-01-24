<template>
  <Html>
    <Head>
      <Title>Welcome to meespostma.nl</Title>
    </Head>
  </Html>

  <TheHeader />

  <slot />

  <TheFooter />
</template>

<script>
import TheHeader from "../components/TheHeader";
import TheFooter from "../components/TheFooter";
export default {
  name: "default",
  components: {TheFooter, TheHeader}
}
</script>

<style scoped>

</style>