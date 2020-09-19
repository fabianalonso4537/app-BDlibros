@extends('principal')
@section('contenido')
<main class="main">
<template v-if="menu==2">
<categoria></categoria>
</template>
<template v-if="menu==5">
<Paises></Paises>
</template>
<template v-if="menu==1">
<autores></autores>
</template>
<template v-if="menu==3">
<editoriales></editoriales>
</template>
<template v-if="menu==4">
<idioma></idioma>
</template>
</main>
@endsection