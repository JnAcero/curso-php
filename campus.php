<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<body>
    <nav>
        <ul>
            <li><img src="./imgs/download.png" width="85px"></li>
            <li>Registro de CAMPERS</li>
        </ul>
    </nav>
    <main>
        <div class="card">
            <h4 class="title">Formulario</h4>
            <form>
                <div>
                    <label>Nombres</label><br>
                    <input type="text" name="nombre" class="form">
                </div>
                <div>
                    <label>Apellidos</label><br>
                    <input type="text" name="apellido" class="form">
                </div>
                <div>
                    <label>Email</label><br>
                    <input type="email" name="email" class="form">
                </div>
                <div>
                    <label>Telefono</label><br>
                    <input type="number" name="tel" class="form">
                </div>
                <div>
                    <label>Nivel de Estudio</label><br>
                    <select name="estudios">
                        <option value="bachiller">Bachiller</option>
                        <option value="tecnico">Tecnico</option>
                        <option value="tecnologo">Tecnologo</option>
                        <option value="profesional">Profesional</option>
                        <option value="estUni">Estudiante UNiversitario</option>
                    </select>
                </div>
                <div class="checkbox">
               
                   
                    <label>Python</label>
                    <input type="checkbox">
                 
                
                    <label>CSS</label>
                    <input type="checkbox">
                   
                  
                    <label>HTML</label>
                    <input type="checkbox">
                 
                 
                    <label>PHP</label>
                    <input type="checkbox">
                  
                </div>  
                <div>
                    <button>Guardar</button>
                </div>
            </form>
        </div>
    </main>
    
    
</body>
</html>