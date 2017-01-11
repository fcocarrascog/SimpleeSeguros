<div class="container" style="margin-top: 20px;" align="center">
  
  <ul class="nav nav-tabs">
    <li class="active"><a href="#a" data-toggle="tab">Antecedentes Personales</a></li>
    <li><a href="#b" data-toggle="tab">Antecedentes Laborales</a></li>
    <li><a href="#c" data-toggle="tab">Antecedentes del Conyuge</a></li>
    <li><a href="#d" data-toggle="tab">Mi Cuenta</a></li>
  </ul>

  <div class="tab-content">
    <div class="tab-pane fade in active" id="a">
      <h3>Antecedentes Personales</h3>
      <br>
      <div class="container">
          <form role="form">
            <div class="form-group col-md-3">
              <label for="appPAterno">Apellido Paterno</label>
              <input type="text" class="form-control" id="appPAterno"
                     placeholder="Ingrese el Apellido Paterno">
            </div>
            <div class="form-group col-md-3">
              <label for="appMaterno">Apellido Materno</label>
              <input type="text" class="form-control" id="appMaterno" 
                     placeholder="Ingrese el Apellido Materno">
            </div>
            <div class="form-group col-md-3">
              <label for="ambosNombres">Nombres</label>
              <input type="text" class="form-control" id="ambosNombres"
                     placeholder="Ingrese ambos Nombres">
            </div>
            <div class="form-group col-md-3">
              <label for="nRut">RUT</label>
              <input type="text" class="form-control" id="nRUT" 
                     placeholder="Ingrese RUT sin puntos. EJ 11111111-K">
            </div>
            <div class="form-group col-md-6">
              <label for="nNacionalidad">Nacionalidad</label>
              <input type="text" class="form-control" id="nNacionalidad" 
                     placeholder="Ingrese Nacionalidad">
            </div>


            <div class="form-group col-md-6">
              <label for="estCivil">Sexo</label>
              <select class="form-control">
                <option>Seleccione</option>
                <option>Masculino</option>
                <option>Femenino</option>
              </select>
            </div>

            

            <div class="form-group col-md-12">
              <label for="dia">Fecha de Nacimiento</label>
            </div>



            <div class="form-group col-md-3">
            <label for="dia">Día</label>
              <select class="form-control" id="dia">

                  <?php for($i = 1941; $i < 2018; $i++)?>{
                  <option value=""><?php $i?></option>
                  }
                  
              </select>
            </div>
                
            <div class="form-group col-md-5">
            <label for="dia">Mes</label>
                    <select class="form-control">
                        <option value="">Enero</option>
                        <option value="">Febrero</option>
                        <option value="">Marzo</option>
                        <option value="">Abril</option>
                        <option value="">Mayo</option>
                        <option value="">Junio</option>
                        <option value="">Julio</option>
                        <option value="">Agosto</option>
                        <option value="">Septiembre</option>
                        <option value="">Octubre</option>
                        <option value="">Noviembre</option>
                        <option value="">Diciembre</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                <label for="dia">Año</label>
                    <select class="form-control">
                        <option value="">1941</option>
                        <option value="">1942</option>
                        <option value="">1943</option>
                        <option value="">1944</option>
                        <option value="">1945</option>
                        <option value="">1946</option>
                        <option value="">1947</option>
                        <option value="">1948</option>
                        <option value="">1949</option>
                        <option value="">1950</option>
                        <option value="">1961</option>
                        <option value="">1962</option>
                        <option value="">1963</option>
                        <option value="">1964</option>
                        <option value="">1965</option>
                        <option value="">1966</option>
                        <option value="">1967</option>
                        <option value="">1968</option>
                        <option value="">1969</option>
                        <option value="">1970</option>
                        <option value="">1971</option>
                        <option value="">1972</option>
                        <option value="">1973</option>
                        <option value="">1974</option>
                        <option value="">1975</option>
                        <option value="">1976</option>
                        <option value="">1977</option>
                        <option value="">1978</option>
                        <option value="">1979</option>
                        <option value="">1980</option>
                        <option value="">1981</option>
                        <option value="">1982</option>
                        <option value="">1983</option>
                        <option value="">1984</option>
                        <option value="">1985</option>
                        <option value="">1986</option>
                        <option value="">1987</option>
                        <option value="">1988</option>
                        <option value="">1989</option>
                        <option value="">1990</option>
                        <option value="">1991</option>
                        <option value="">1992</option>
                        <option value="">1993</option>
                        <option value="">1994</option>
                        <option value="">1995</option>
                        <option value="">1996</option>
                        <option value="">1997</option>
                        <option value="">1998</option>
                        <option value="">1999</option>
                        <option value="">2001</option>
                        <option value="">2002</option>
                        <option value="">2003</option>
                        <option value="">2004</option>
                        <option value="">2005</option>
                        <option value="">2006</option>
                        <option value="">2007</option>
                        <option value="">2008</option>
                        <option value="">2009</option>
                        <option value="">2010</option>
                        <option value="">2011</option>
                        <option value="">2012</option>
                        <option value="">2013</option>
                        <option value="">2014</option>
                        <option value="">2015</option>
                        <option value="">2016</option>
                        <option value="">2017</option>
                    </select>
            </div>
            
            <div class="form-group col-md-4">
              <label for="numCargas">Número de cargas (Incluye Conyuge)</label>
              <input type="text" class="form-control" id="numCargas" 
                     placeholder="Ingrese el N° de cargas">
            </div>

            <div class="form-group col-md-4">
              <label for="estCivil">Estado Civil</label>
              <select class="form-control">
                <option>Seleccione</option>
                <option>Soltero</option>
                <option>Viudo</option>
                <option>Separado</option>
                <option>Casado</option>
              </select>
            </div>

            <div class="form-group col-md-4">
            <label for="nProfesión">Separado de Bienes</label>
              <select class="form-control">
                <option>Seleccione</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="nEstudios">Estudios</label>
              <select class="form-control">
                <option>Seleccione</option>
                <option>Primaria</option>
                <option>Secundaria</option>
                <option>Técnico</option>
                <option>Universitaria</option>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="nProfesión">Profesión</label>
              <input type="text" class="form-control" id="nProfesión" 
                     placeholder="Ingrese el nombre de su Profesión">
            </div>


            <div class="form-group col-md-4">
              <label for="nDomicilio">Domicilio Actual</label>
              <input type="text" class="form-control" id="nDomicilio" 
                     placeholder="Ingrese la Dirección">
            </div>



            <div class="form-group col-md-4">
              <label for="nNumeroDom">Número</label>
              <input type="text" class="form-control" id="nNumeroDom" 
                     placeholder="Ingrese el Número">
            </div>



            <div class="form-group col-md-4">
                <label for="nPisoDepto">N° Departamento</label>
                <input type="text" class="form-control" id="nPisoDepto" 
                       placeholder="Ingrese el numero del departamento (Sólo si aplica)">
            </div>

            <div class="form-group col-md-4">
                <label for="nComuna">Comuna</label>
                <input type="text" class="form-control" id="nComuna" 
                       placeholder="Ingrese nombre de la Comuna">
            </div>

            <div class="form-group col-md-4">
                <label for="nCiudad">Ciudad</label>
                <input type="text" class="form-control" id="nCiudad" 
                       placeholder="Ingrese nombre de la Ciudad">
            </div>

            <div class="form-group col-md-4">
                <label for="nTelefono">N° de Teléfono</label>
                <input type="text" class="form-control" id="nTelefono" 
                       placeholder="Ingrese número de teléfono">
            </div>
            
            <div class="form-group col-md-6">
              <label for="nEstudios">La casa en que vive actualmente es: </label>
              <select class="form-control">
                <option>Seleccione</option>
                <option>Propia</option>
                <option>Arrendada</option>
                <option>Otro</option>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="nEstudios">Totalmente pagada: </label>
              <select class="form-control">
                <option>Seleccione</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="nEstudios">La casa es arrendada: </label>
              <select class="form-control">
                <option>Seleccione</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </div>

            <div class="form-group col-md-6">
                <label for="montoArriendo">Canon de Arriendo M$</label>
                <input type="text" class="form-control" id="montoArriendo" 
                       placeholder="Ingrese el monto">
            </div>
            
            <div class="form-group col-md-12">
            <button type="submit" class="btn btn-primary pull-right">Siguiente</button>
            </div>

          
          </form>
        </div>
        </div>

    <div class="tab-pane fade" id="b">bbbbb</div>
    <div class="tab-pane fade" id="c">sssssa</div>
    <div class="tab-pane fade" id="d">222222</div>
  </div>
</div>



  