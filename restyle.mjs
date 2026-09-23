import fs from 'node:fs';
let source=fs.readFileSync('build.mjs','utf8');
source=source.replace("import fs from 'node:fs';import path from 'node:path';","import fs from 'node:fs';import path from 'node:path';\nimport {home} from './home.mjs';");
source=source.replace(/const nav=\[.*?\];/,"const nav=[['/','Inicio'],['/videos/','Vídeos'],['/colaboraciones/','Colaboraciones'],['/varios/','Varios']];");
source=source.replace('Hablemos ↗</a></nav>','Contacto</a></nav>');
source=source.replace("${[...nav,['/libros/','Libros y publicaciones'],['/media-kit/','Media kit'],['/contacto/','Contacto']]","${[...nav,['/sobre-mi/','Sobre mí'],['/redes/','Redes'],['/prensa/','Prensa y TV'],['/libros/','Libros y publicaciones'],['/media-kit/','Media kit'],['/contacto/','Contacto']]}");
// Keep the metadata and every existing route; replace only the home composition.
const start=source.indexOf("page('/','Álvaro de Linares");
const end=source.indexOf("\nif(process.argv.includes('--full'))",start);
source=source.slice(0,start)+"page('/','Álvaro de Linares | Gadgets, trucos y curiosidades desde Málaga','Descubre a Álvaro de Linares: creador de contenido malagueño. Gadgets, trucos para casa, curiosidades, vídeos, redes y colaboraciones.',home({link,social,photo,press}));"+source.slice(end);
// Undo a template-delimiter artifact if the footer replacement introduced one.
source=source.replace("['/contacto/','Contacto']]}.map", "['/contacto/','Contacto']].map");
fs.writeFileSync('build.mjs',source);
