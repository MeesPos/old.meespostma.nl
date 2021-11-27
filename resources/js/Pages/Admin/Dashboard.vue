<template>
    <HeaderTitle title="Dashboard" />
    Landed on Dashboard
</template>

<script>
import Admin from '../../Layouts/Admin'
import HeaderTitle from "../../Shared/Dashboard/HeaderTitle";

export default {
    name: "Dashboard",
    components: {HeaderTitle},
    layout: Admin
}
</script>
