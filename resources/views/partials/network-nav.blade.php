<h2 class="network-name"><a href="">compromís.net</a></h2>

<div class="row">
  <div class="col-lg-3 col-md-6">
    <h3>PARTITS</h3>
    <ul>
      <li><a href="">BLOC</a></li>
      <li><a href="">Iniciativa</a></li>
      <li><a href="">Verds</a></li>
    </ul>

    <h3>JOVENTUTS</h3>
    <ul>
      <li><a href="">JovesPV-Compromís</a></li>
      <li><a href="">Joves amb Iniciativa</a></li>
      <li><a href="">Joves Verds-Equo</a></li>
    </ul>
  </div>
  <div class="col-lg-3 col-md-6">
    <h3>INSTITUCIONS</h3>
    <ul>
      <li><a href="">Corts Valencianes</a></li>
      <li><a href="">Congrés</a></li>
      <li><a href="">Senat</a></li>
      <li><a href="">Diputació de València</a></li>
      <li><a href="">Diputació d'Alacant</a></li>
      <li><a href="">Diputació de Castelló</a></li>
      <li><a href="">FVMP</a></li>
    </li>
  </div>
  <div class="col-lg-6 col-md-12 mt-2 mt-md-0" id="locals">
    <h3>COMPROMÍS AL TEU MUNICIPI</h3>
    <form class="search-form" v-on:submit="filter">
      <label for="municipality" class="sr-only">Municipi</label>
      <input type="search" name="municipality" id="municipality" class="form-control search-field" placeholder="Escriu el teu municipi" v-on:input="(e) => { territorialText = ''; filterValue = e.target.value; }" v-bind:value="territorialText ? territorialText : filterValue" />
      <input type="submit" name="municipality_filter" class="sr-only" />
      <i class="far fa-search"></i>
    </form>
    <ul class="territorial pill-list mt-2">
      <li v-for="website in filteredResults" v-bind:key="website.id">
        <a class="pill" v-bind:href="website.url" target="_blank" v-if="website.hasOwnProperty('territori_id')"><span v-text="website.name"></span></a>
        <a class="pill" href="#" v-on:click.prevent="setTerritory(website)" v-else><span v-text="website.name"></a>
      </li>
    </ul>
  </div>
</div>
