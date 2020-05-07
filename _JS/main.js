//FUNÇÃO DO MENU, PARA MOSTRAR E TIRAR
let menu1 = document.querySelector('.menu1')
let menu2 = document.querySelector('.menu2')
let bodyoc = document.querySelector('.body')
let menu3 = document.querySelector('.container')
let mostrando = document.querySelector('.menu_responsivo')
menu1.addEventListener('click', function () {
    mostrando.classList.add('mostrar')
    bodyoc.classList.add('ocultar')
})
menu2.addEventListener('click', function () {
    mostrando.classList.remove('mostrar')
    bodyoc.classList.remove('ocultar')
    mostrar_categoriacell.classList.add('none')
    apertar_categoriacell.classList.remove('none')
    fechar_categoriacell.classList.add('none')
})
menu3.addEventListener('click', function () {
    mostrando.classList.remove('mostrar')
    bodyoc.classList.remove('ocultar')
    mostrar_categoriacell.classList.add('none')
    apertar_categoriacell.classList.remove('none')
    fechar_categoriacell.classList.add('none')
})
//mostrar categoria

let mostrar_categoriacell = document.querySelector('.mostrar_categoria')
let apertar_categoriacell = document.querySelector('.cat1')
let fechar_categoriacell = document.querySelector('.cat2')

apertar_categoriacell.addEventListener('click', function(){
    mostrar_categoriacell.classList.remove('none')
    apertar_categoriacell.classList.add('none')
    fechar_categoriacell.classList.remove('none')
})
fechar_categoriacell.addEventListener('click', function(){
    mostrar_categoriacell.classList.add('none')
    apertar_categoriacell.classList.remove('none')
    fechar_categoriacell.classList.add('none')
})
//parte da segunda categoria
//1
let var1 = document.querySelector('.var1')
let var1a = document.querySelector('.var1a')
let catcell1 = document.querySelector('.catcell1')

var1.addEventListener('click', function(){
    catcell1.classList.remove('none')
    var1.classList.add('none')
    var1a.classList.remove('none')
    ///////////////////////////////////
    catcell2.classList.add('none')
    var2.classList.remove('none')
    var2a.classList.add('none')
    catcell3.classList.add('none')
    var3.classList.remove('none')
    var3a.classList.add('none')
    catcell4.classList.add('none')
    var4.classList.remove('none')
    var4a.classList.add('none')
    catcell5.classList.add('none')
    var5.classList.remove('none')
    var5a.classList.add('none')
    catcell6.classList.add('none')
    var6.classList.remove('none')
    var6a.classList.add('none')
    catcell7.classList.add('none')
    var7.classList.remove('none')
    var7a.classList.add('none')
    catcell8.classList.add('none')
    var8.classList.remove('none')
    var8a.classList.add('none')
    catcell9.classList.add('none')
    var9.classList.remove('none')
    var9a.classList.add('none')
    catcell10.classList.add('none')
    var10.classList.remove('none')
    var10a.classList.add('none')
    ///////////////////////////////////
})
var1a.addEventListener('click', function(){
    catcell1.classList.add('none')
    var1.classList.remove('none')
    var1a.classList.add('none')
})
//2
let var2 = document.querySelector('.var2')
let var2a = document.querySelector('.var2a')
let catcell2 = document.querySelector('.catcell2')

var2.addEventListener('click', function(){
    catcell2.classList.remove('none')
    var2.classList.add('none')
    var2a.classList.remove('none')
        ///////////////////////////////////
        catcell1.classList.add('none')
        var1.classList.remove('none')
        var1a.classList.add('none')
        catcell3.classList.add('none')
        var3.classList.remove('none')
        var3a.classList.add('none')
        catcell4.classList.add('none')
        var4.classList.remove('none')
        var4a.classList.add('none')
        catcell5.classList.add('none')
        var5.classList.remove('none')
        var5a.classList.add('none')
        catcell6.classList.add('none')
        var6.classList.remove('none')
        var6a.classList.add('none')
        catcell7.classList.add('none')
        var7.classList.remove('none')
        var7a.classList.add('none')
        catcell8.classList.add('none')
        var8.classList.remove('none')
        var8a.classList.add('none')
        catcell9.classList.add('none')
        var9.classList.remove('none')
        var9a.classList.add('none')
        catcell10.classList.add('none')
        var10.classList.remove('none')
        var10a.classList.add('none')
        ///////////////////////////////////
})
var2a.addEventListener('click', function(){
    catcell2.classList.add('none')
    var2.classList.remove('none')
    var2a.classList.add('none')
})
//3
let var3 = document.querySelector('.var3')
let var3a = document.querySelector('.var3a')
let catcell3 = document.querySelector('.catcell3')

var3.addEventListener('click', function(){
    catcell3.classList.remove('none')
    var3.classList.add('none')
    var3a.classList.remove('none')
        ///////////////////////////////////
        catcell2.classList.add('none')
        var2.classList.remove('none')
        var2a.classList.add('none')
        catcell1.classList.add('none')
        var1.classList.remove('none')
        var1a.classList.add('none')
        catcell4.classList.add('none')
        var4.classList.remove('none')
        var4a.classList.add('none')
        catcell5.classList.add('none')
        var5.classList.remove('none')
        var5a.classList.add('none')
        catcell6.classList.add('none')
        var6.classList.remove('none')
        var6a.classList.add('none')
        catcell7.classList.add('none')
        var7.classList.remove('none')
        var7a.classList.add('none')
        catcell8.classList.add('none')
        var8.classList.remove('none')
        var8a.classList.add('none')
        catcell9.classList.add('none')
        var9.classList.remove('none')
        var9a.classList.add('none')
        catcell10.classList.add('none')
        var10.classList.remove('none')
        var10a.classList.add('none')
        ///////////////////////////////////
})
var3a.addEventListener('click', function(){
    catcell3.classList.add('none')
    var3.classList.remove('none')
    var3a.classList.add('none')
})
//4
let var4 = document.querySelector('.var4')
let var4a = document.querySelector('.var4a')
let catcell4 = document.querySelector('.catcell4')

var4.addEventListener('click', function(){
    catcell4.classList.remove('none')
    var4.classList.add('none')
    var4a.classList.remove('none')
        ///////////////////////////////////
        catcell2.classList.add('none')
        var2.classList.remove('none')
        var2a.classList.add('none')
        catcell3.classList.add('none')
        var3.classList.remove('none')
        var3a.classList.add('none')
        catcell1.classList.add('none')
        var1.classList.remove('none')
        var1a.classList.add('none')
        catcell5.classList.add('none')
        var5.classList.remove('none')
        var5a.classList.add('none')
        catcell6.classList.add('none')
        var6.classList.remove('none')
        var6a.classList.add('none')
        catcell7.classList.add('none')
        var7.classList.remove('none')
        var7a.classList.add('none')
        catcell8.classList.add('none')
        var8.classList.remove('none')
        var8a.classList.add('none')
        catcell9.classList.add('none')
        var9.classList.remove('none')
        var9a.classList.add('none')
        catcell10.classList.add('none')
        var10.classList.remove('none')
        var10a.classList.add('none')
        ///////////////////////////////////
})
var4a.addEventListener('click', function(){
    catcell4.classList.add('none')
    var4.classList.remove('none')
    var4a.classList.add('none')
})
//5
let var5 = document.querySelector('.var5')
let var5a = document.querySelector('.var5a')
let catcell5 = document.querySelector('.catcell5')

var5.addEventListener('click', function(){
    catcell5.classList.remove('none')
    var5.classList.add('none')
    var5a.classList.remove('none')
        ///////////////////////////////////
        catcell2.classList.add('none')
        var2.classList.remove('none')
        var2a.classList.add('none')
        catcell3.classList.add('none')
        var3.classList.remove('none')
        var3a.classList.add('none')
        catcell4.classList.add('none')
        var4.classList.remove('none')
        var4a.classList.add('none')
        catcell1.classList.add('none')
        var1.classList.remove('none')
        var1a.classList.add('none')
        catcell6.classList.add('none')
        var6.classList.remove('none')
        var6a.classList.add('none')
        catcell7.classList.add('none')
        var7.classList.remove('none')
        var7a.classList.add('none')
        catcell8.classList.add('none')
        var8.classList.remove('none')
        var8a.classList.add('none')
        catcell9.classList.add('none')
        var9.classList.remove('none')
        var9a.classList.add('none')
        catcell10.classList.add('none')
        var10.classList.remove('none')
        var10a.classList.add('none')
        ///////////////////////////////////
})
var5a.addEventListener('click', function(){
    catcell5.classList.add('none')
    var5.classList.remove('none')
    var5a.classList.add('none')
})
//6
let var6 = document.querySelector('.var6')
let var6a = document.querySelector('.var6a')
let catcell6 = document.querySelector('.catcell6')

var6.addEventListener('click', function(){
    catcell6.classList.remove('none')
    var6.classList.add('none')
    var6a.classList.remove('none')
        ///////////////////////////////////
        catcell2.classList.add('none')
        var2.classList.remove('none')
        var2a.classList.add('none')
        catcell3.classList.add('none')
        var3.classList.remove('none')
        var3a.classList.add('none')
        catcell4.classList.add('none')
        var4.classList.remove('none')
        var4a.classList.add('none')
        catcell5.classList.add('none')
        var5.classList.remove('none')
        var5a.classList.add('none')
        catcell1.classList.add('none')
        var1.classList.remove('none')
        var1a.classList.add('none')
        catcell7.classList.add('none')
        var7.classList.remove('none')
        var7a.classList.add('none')
        catcell8.classList.add('none')
        var8.classList.remove('none')
        var8a.classList.add('none')
        catcell9.classList.add('none')
        var9.classList.remove('none')
        var9a.classList.add('none')
        catcell10.classList.add('none')
        var10.classList.remove('none')
        var10a.classList.add('none')
        ///////////////////////////////////
})
var6a.addEventListener('click', function(){
    catcell6.classList.add('none')
    var6.classList.remove('none')
    var6a.classList.add('none')
})
//7
let var7 = document.querySelector('.var7')
let var7a = document.querySelector('.var7a')
let catcell7 = document.querySelector('.catcell7')

var7.addEventListener('click', function(){
    catcell7.classList.remove('none')
    var7.classList.add('none')
    var7a.classList.remove('none')
        ///////////////////////////////////
        catcell2.classList.add('none')
        var2.classList.remove('none')
        var2a.classList.add('none')
        catcell3.classList.add('none')
        var3.classList.remove('none')
        var3a.classList.add('none')
        catcell4.classList.add('none')
        var4.classList.remove('none')
        var4a.classList.add('none')
        catcell5.classList.add('none')
        var5.classList.remove('none')
        var5a.classList.add('none')
        catcell6.classList.add('none')
        var6.classList.remove('none')
        var6a.classList.add('none')
        catcell1.classList.add('none')
        var1.classList.remove('none')
        var1a.classList.add('none')
        catcell8.classList.add('none')
        var8.classList.remove('none')
        var8a.classList.add('none')
        catcell9.classList.add('none')
        var9.classList.remove('none')
        var9a.classList.add('none')
        catcell10.classList.add('none')
        var10.classList.remove('none')
        var10a.classList.add('none')
        ///////////////////////////////////
})
var7a.addEventListener('click', function(){
    catcell7.classList.add('none')
    var7.classList.remove('none')
    var7a.classList.add('none')
})
//8
let var8 = document.querySelector('.var8')
let var8a = document.querySelector('.var8a')
let catcell8 = document.querySelector('.catcell8')

var8.addEventListener('click', function(){
    catcell8.classList.remove('none')
    var8.classList.add('none')
    var8a.classList.remove('none')
        ///////////////////////////////////
        catcell2.classList.add('none')
        var2.classList.remove('none')
        var2a.classList.add('none')
        catcell3.classList.add('none')
        var3.classList.remove('none')
        var3a.classList.add('none')
        catcell4.classList.add('none')
        var4.classList.remove('none')
        var4a.classList.add('none')
        catcell5.classList.add('none')
        var5.classList.remove('none')
        var5a.classList.add('none')
        catcell6.classList.add('none')
        var6.classList.remove('none')
        var6a.classList.add('none')
        catcell7.classList.add('none')
        var7.classList.remove('none')
        var7a.classList.add('none')
        catcell1.classList.add('none')
        var1.classList.remove('none')
        var1a.classList.add('none')
        catcell9.classList.add('none')
        var9.classList.remove('none')
        var9a.classList.add('none')
        catcell10.classList.add('none')
        var10.classList.remove('none')
        var10a.classList.add('none')
        ///////////////////////////////////
})
var8a.addEventListener('click', function(){
    catcell8.classList.add('none')
    var8.classList.remove('none')
    var8a.classList.add('none')
})
//9
let var9 = document.querySelector('.var9')
let var9a = document.querySelector('.var9a')
let catcell9 = document.querySelector('.catcell9')

var9.addEventListener('click', function(){
    catcell9.classList.remove('none')
    var9.classList.add('none')
    var9a.classList.remove('none')
        ///////////////////////////////////
        catcell2.classList.add('none')
        var2.classList.remove('none')
        var2a.classList.add('none')
        catcell3.classList.add('none')
        var3.classList.remove('none')
        var3a.classList.add('none')
        catcell4.classList.add('none')
        var4.classList.remove('none')
        var4a.classList.add('none')
        catcell5.classList.add('none')
        var5.classList.remove('none')
        var5a.classList.add('none')
        catcell6.classList.add('none')
        var6.classList.remove('none')
        var6a.classList.add('none')
        catcell7.classList.add('none')
        var7.classList.remove('none')
        var7a.classList.add('none')
        catcell8.classList.add('none')
        var8.classList.remove('none')
        var8a.classList.add('none')
        catcell1.classList.add('none')
        var1.classList.remove('none')
        var1a.classList.add('none')
        catcell10.classList.add('none')
        var10.classList.remove('none')
        var10a.classList.add('none')
        ///////////////////////////////////
})
var9a.addEventListener('click', function(){
    catcell9.classList.add('none')
    var9.classList.remove('none')
    var9a.classList.add('none')
})
//10
let var10 = document.querySelector('.var10')
let var10a = document.querySelector('.var10a')
let catcell10 = document.querySelector('.catcell10')

var10.addEventListener('click', function(){
    catcell10.classList.remove('none')
    var10.classList.add('none')
    var10a.classList.remove('none')
        ///////////////////////////////////
        catcell2.classList.add('none')
        var2.classList.remove('none')
        var2a.classList.add('none')
        catcell3.classList.add('none')
        var3.classList.remove('none')
        var3a.classList.add('none')
        catcell4.classList.add('none')
        var4.classList.remove('none')
        var4a.classList.add('none')
        catcell5.classList.add('none')
        var5.classList.remove('none')
        var5a.classList.add('none')
        catcell6.classList.add('none')
        var6.classList.remove('none')
        var6a.classList.add('none')
        catcell7.classList.add('none')
        var7.classList.remove('none')
        var7a.classList.add('none')
        catcell8.classList.add('none')
        var8.classList.remove('none')
        var8a.classList.add('none')
        catcell9.classList.add('none')
        var9.classList.remove('none')
        var9a.classList.add('none')
        catcell1.classList.add('none')
        var1.classList.remove('none')
        var1a.classList.add('none')
        ///////////////////////////////////
})
var10a.addEventListener('click', function(){
    catcell10.classList.add('none')
    var10.classList.remove('none')
    var10a.classList.add('none')
})

//FUNÇÃO PARA MOSTRAR INPUT QUANDO APERTAMOS NA LUPA
let pesquisar = document.querySelector('.img_buscar_produto')
let pesquisar_remover = document.querySelector('.seta_buscar_produto')
let input_pesquisar = document.querySelector('.input_buscar_produto')
let buscar = document.querySelector('.img_buscar_produto')
let sacola = document.querySelector('.img_sacola_produto')
let texto_logo = document.querySelector('.texto_logo_menu')

pesquisar.addEventListener('click', function () {
    input_pesquisar.classList.remove('input_buscar_produto2')
    input_pesquisar.focus();
    pesquisar_remover.classList.remove('seta_buscar_produto2')
    buscar.classList.add('img_buscar_produto2')
    sacola.classList.add('img_sacola_produto2')
    menu1.classList.add('seta_buscar_produto2')
    texto_logo.classList.add('texto_logo_menu2')
})
pesquisar_remover.addEventListener('click', function () {
    input_pesquisar.classList.add('input_buscar_produto2')
    pesquisar_remover.classList.add('seta_buscar_produto2')
    menu1.classList.remove('seta_buscar_produto2')
    buscar.classList.remove('img_buscar_produto2')
    sacola.classList.remove('img_sacola_produto2')
    texto_logo.classList.remove('texto_logo_menu2')
})
/* adicionar favoritos celular*/
let nome1c = document.querySelector('.agvwefve')

nome1c.addEventListener('click', function(){
    nome1c.classList.remove('jhxgcfe')
    nome1c.classList.add('cgmuecb')
})
/* adicionar favoritos pc 2*/
let nome2c = document.querySelector('.bgvwefve')

nome2c.addEventListener('click', function(){
    nome2c.classList.remove('jhxgcfe')
    nome2c.classList.add('cgmuecb')
})
/* adicionar favoritos cell 3*/
let nome3c = document.querySelector('.cgvwefve')

nome3c.addEventListener('click', function(){
    nome3c.classList.remove('jhxgcfe')
    nome3c.classList.add('cgmuecb')
})
/* adicionar favoritos cell 4*/
let nome4c = document.querySelector('.dgvwefve')

nome4c.addEventListener('click', function(){
    nome4c.classList.remove('jhxgcfe')
    nome4c.classList.add('cgmuecb')
})
/* adicionar favoritos cell 5*/
let nome5c = document.querySelector('.egvwefve')

nome5c.addEventListener('click', function(){
    nome5c.classList.remove('jhxgcfe')
    nome5c.classList.add('cgmuecb')
})
/* adicionar favoritos cell 6*/
let nome6c = document.querySelector('.fgvwefve')

nome6c.addEventListener('click', function(){
    nome6c.classList.remove('jhxgcfe')
    nome6c.classList.add('cgmuecb')
})

/* formato pc */

/* pesquisar pc */
 let input_buscar = document.getElementById('input_pesquisar_buscar_menu')
 let buscar_menu = document.querySelector('.dscxdvdfv')

 input_buscar.addEventListener('click', function(){
     buscar_menu.classList.remove('pesquisar_buscar_menu2')
 })

// categoria

let categora_pro = document.querySelector('.vbefhvb')
let categora_pro_pegar = document.querySelector('.nomes_menu_todos_os_produtos')

categora_pro.addEventListener('mouseenter', function(){
    categora_pro_pegar.classList.remove('eveverbd')  
    categora_pro.classList.add('fvdfbdbc')  
    categora_pro_pegar2.classList.add('eveverbd')  
    categora_pro2.classList.remove('fvdfbdbc')  
    categora_pro_pegar3.classList.add('eveverbd')  
    categora_pro3.classList.remove('fvdfbdbc')  
    categora_pro_pegar4.classList.add('eveverbd')  
    categora_pro4.classList.remove('fvdfbdbc')  
    categora_pro_pegar5.classList.add('eveverbd')  
    categora_pro5.classList.remove('fvdfbdbc')  
    categora_pro_pegar6.classList.add('eveverbd')  
    categora_pro6.classList.remove('fvdfbdbc')  
    categora_pro_pegar7.classList.add('eveverbd')  
    categora_pro7.classList.remove('fvdfbdbc')  
})

categora_pro_pegar.addEventListener('mouseleave', function(){
    categora_pro_pegar.classList.add('eveverbd')  
    categora_pro.classList.remove('fvdfbdbc')  
})
//PARTE2
let categora_pro2 = document.querySelector('.vbefhvb2')
let categora_pro_pegar2 = document.querySelector('.nomes_menu_todos_os_produtos2')

categora_pro2.addEventListener('mouseenter', function(){
    categora_pro_pegar.classList.add('eveverbd')  
    categora_pro.classList.remove('fvdfbdbc')  
    categora_pro_pegar2.classList.remove('eveverbd')  
    categora_pro2.classList.add('fvdfbdbc')  
    categora_pro_pegar3.classList.add('eveverbd')  
    categora_pro3.classList.remove('fvdfbdbc')  
    categora_pro_pegar4.classList.add('eveverbd')  
    categora_pro4.classList.remove('fvdfbdbc')  
    categora_pro_pegar5.classList.add('eveverbd')  
    categora_pro5.classList.remove('fvdfbdbc')  
    categora_pro_pegar6.classList.add('eveverbd')  
    categora_pro6.classList.remove('fvdfbdbc')  
    categora_pro_pegar7.classList.add('eveverbd')  
    categora_pro7.classList.remove('fvdfbdbc')  
})

categora_pro_pegar2.addEventListener('mouseleave', function(){
    categora_pro_pegar2.classList.add('eveverbd')  
    categora_pro2.classList.remove('fvdfbdbc')  
})
//PARTE3
let categora_pro3 = document.querySelector('.vbefhvb3')
let categora_pro_pegar3 = document.querySelector('.nomes_menu_todos_os_produtos3')

categora_pro3.addEventListener('mouseenter', function(){
    categora_pro_pegar.classList.add('eveverbd')  
    categora_pro.classList.remove('fvdfbdbc')  
    categora_pro_pegar2.classList.add('eveverbd')  
    categora_pro2.classList.remove('fvdfbdbc')  
    categora_pro_pegar3.classList.remove('eveverbd')  
    categora_pro3.classList.add('fvdfbdbc')  
    categora_pro_pegar4.classList.add('eveverbd')  
    categora_pro4.classList.remove('fvdfbdbc')  
    categora_pro_pegar5.classList.add('eveverbd')  
    categora_pro5.classList.remove('fvdfbdbc')  
    categora_pro_pegar6.classList.add('eveverbd')  
    categora_pro6.classList.remove('fvdfbdbc')  
    categora_pro_pegar7.classList.add('eveverbd')  
    categora_pro7.classList.remove('fvdfbdbc')  
})

categora_pro_pegar3.addEventListener('mouseleave', function(){
    categora_pro_pegar3.classList.add('eveverbd')  
    categora_pro3.classList.remove('fvdfbdbc')  
})
//PARTE4
let categora_pro4 = document.querySelector('.vbefhvb4')
let categora_pro_pegar4 = document.querySelector('.nomes_menu_todos_os_produtos4')

categora_pro4.addEventListener('mouseenter', function(){
    categora_pro_pegar.classList.add('eveverbd')  
    categora_pro.classList.remove('fvdfbdbc')  
    categora_pro_pegar2.classList.add('eveverbd')  
    categora_pro2.classList.remove('fvdfbdbc')  
    categora_pro_pegar3.classList.add('eveverbd')  
    categora_pro3.classList.remove('fvdfbdbc')  
    categora_pro_pegar4.classList.remove('eveverbd')  
    categora_pro4.classList.add('fvdfbdbc')  
    categora_pro_pegar5.classList.add('eveverbd')  
    categora_pro5.classList.remove('fvdfbdbc')  
    categora_pro_pegar6.classList.add('eveverbd')  
    categora_pro6.classList.remove('fvdfbdbc')  
    categora_pro_pegar7.classList.add('eveverbd')  
    categora_pro7.classList.remove('fvdfbdbc')  
  
})

categora_pro_pegar4.addEventListener('mouseleave', function(){
    categora_pro_pegar4.classList.add('eveverbd')  
    categora_pro4.classList.remove('fvdfbdbc')  
})
//PARTE5
let categora_pro5 = document.querySelector('.vbefhvb5')
let categora_pro_pegar5 = document.querySelector('.nomes_menu_todos_os_produtos5')

categora_pro5.addEventListener('mouseenter', function(){
    categora_pro_pegar.classList.add('eveverbd')  
    categora_pro.classList.remove('fvdfbdbc')  
    categora_pro_pegar2.classList.add('eveverbd')  
    categora_pro2.classList.remove('fvdfbdbc')  
    categora_pro_pegar3.classList.add('eveverbd')  
    categora_pro3.classList.remove('fvdfbdbc')  
    categora_pro_pegar4.classList.add('eveverbd')  
    categora_pro4.classList.remove('fvdfbdbc')  
    categora_pro_pegar5.classList.remove('eveverbd')  
    categora_pro5.classList.add('fvdfbdbc')  
    categora_pro_pegar6.classList.add('eveverbd')  
    categora_pro6.classList.remove('fvdfbdbc')  
    categora_pro_pegar7.classList.add('eveverbd')  
    categora_pro7.classList.remove('fvdfbdbc')  
  
})

categora_pro_pegar5.addEventListener('mouseleave', function(){
    categora_pro_pegar5.classList.add('eveverbd')  
    categora_pro5.classList.remove('fvdfbdbc')  
})
//PARTE6
let categora_pro6 = document.querySelector('.vbefhvb6')
let categora_pro_pegar6 = document.querySelector('.nomes_menu_todos_os_produtos6')

categora_pro6.addEventListener('mouseenter', function(){
    categora_pro_pegar.classList.add('eveverbd')  
    categora_pro.classList.remove('fvdfbdbc')  
    categora_pro_pegar2.classList.add('eveverbd')  
    categora_pro2.classList.remove('fvdfbdbc')  
    categora_pro_pegar3.classList.add('eveverbd')  
    categora_pro3.classList.remove('fvdfbdbc')  
    categora_pro_pegar4.classList.add('eveverbd')  
    categora_pro4.classList.remove('fvdfbdbc')  
    categora_pro_pegar5.classList.add('eveverbd')  
    categora_pro5.classList.remove('fvdfbdbc')  
    categora_pro_pegar6.classList.remove('eveverbd')  
    categora_pro6.classList.add('fvdfbdbc')  
    categora_pro_pegar7.classList.add('eveverbd')  
    categora_pro7.classList.remove('fvdfbdbc')  
  
})

categora_pro_pegar6.addEventListener('mouseleave', function(){
    categora_pro_pegar6.classList.add('eveverbd')  
    categora_pro6.classList.remove('fvdfbdbc')  
})
//PARTE7
let categora_pro7 = document.querySelector('.vbefhvb7')
let categora_pro_pegar7 = document.querySelector('.nomes_menu_todos_os_produtos7')

categora_pro7.addEventListener('mouseenter', function(){
    categora_pro_pegar.classList.add('eveverbd')  
    categora_pro.classList.remove('fvdfbdbc')  
    categora_pro_pegar2.classList.add('eveverbd')  
    categora_pro2.classList.remove('fvdfbdbc')  
    categora_pro_pegar3.classList.add('eveverbd')  
    categora_pro3.classList.remove('fvdfbdbc')  
    categora_pro_pegar4.classList.add('eveverbd')  
    categora_pro4.classList.remove('fvdfbdbc')  
    categora_pro_pegar5.classList.add('eveverbd')  
    categora_pro5.classList.remove('fvdfbdbc')  
    categora_pro_pegar6.classList.add('eveverbd')  
    categora_pro6.classList.remove('fvdfbdbc')  
    categora_pro_pegar7.classList.remove('eveverbd')  
    categora_pro7.classList.add('fvdfbdbc')  
})

categora_pro_pegar7.addEventListener('mouseleave', function(){
    categora_pro_pegar7.classList.add('eveverbd')  
    categora_pro7.classList.remove('fvdfbdbc')  
})
//cookie pra login ou cadastro
let eUS = document.querySelector('.entrar_conta')
eUS.addEventListener('click', function(){
    document.cookie = "username=John Doe; expires=Thu, 18 Dec 2013 12:00:00 UTC";
})





/* adicionar favoritos pc */
let nome1 = document.querySelector('.afasdfcsf')

nome1.addEventListener('click', function(){
    nome1.classList.remove('sztsvdr')
    nome1.classList.add('jghsdrg')
})
/* adicionar favoritos pc 2*/
let nome2 = document.querySelector('.bfasdfcsf')

nome2.addEventListener('click', function(){
    nome2.classList.remove('sztsvdr')
    nome2.classList.add('jghsdrg')
})
/* adicionar favoritos pc 3*/
let nome3 = document.querySelector('.cfasdfcsf')

nome3.addEventListener('click', function(){
    nome3.classList.remove('sztsvdr')
    nome3.classList.add('jghsdrg')
})/* adicionar favoritos pc 4*/
let nome4 = document.querySelector('.dfasdfcsf')

nome4.addEventListener('click', function(){
    nome4.classList.remove('sztsvdr')
    nome4.classList.add('jghsdrg')
})/* adicionar favoritos pc 5*/
let nome5 = document.querySelector('.efasdfcsf')

nome5.addEventListener('click', function(){
    nome5.classList.remove('sztsvdr')
    nome5.classList.add('jghsdrg')
})/* adicionar favoritos pc 6*/
let nome6 = document.querySelector('.ffasdfcsf')

nome6.addEventListener('click', function(){
    nome6.classList.remove('sztsvdr')
    nome6.classList.add('jghsdrg')
})/* adicionar favoritos pc 7*/
let nome7 = document.querySelector('.gfasdfcsf')

nome7.addEventListener('click', function(){
    nome7.classList.remove('sztsvdr')
    nome7.classList.add('jghsdrg')
})/* adicionar favoritos pc 8*/
let nome8 = document.querySelector('.ifasdfcsf')

nome8.addEventListener('click', function(){
    nome8.classList.remove('sztsvdr')
    nome8.classList.add('jghsdrg')
})
/* adicionar favoritos pc 9*/
let nome9 = document.querySelector('.kfasdfcsf')

nome9.addEventListener('click', function(){
    nome9.classList.remove('sztsvdr')
    nome9.classList.add('jghsdrg')
})
/* adicionar favoritos pc 10*/
let nome10 = document.querySelector('.lfasdfcsf')

nome10.addEventListener('click', function(){
    nome10.classList.remove('sztsvdr')
    nome10.classList.add('jghsdrg')
})





