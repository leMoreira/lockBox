<div class="grid grid-cols-2 text-orange-700 ">
    <div class="hero min-h-screen flex ml-40">
        <div class="hero-content -mt-20">
  
            <div>
                <p class="py-2 text-xl">
                    Bem vindo ao
                </p>

                <h1 class="text-6xl font-bold">LockBox</h1>
                <p class="py-2 pb-4 text-xl">
                    Onde você guarda <span class="italic"> tudo </span> com segurança 
                </p>
      
            </div>
        </div>
    </div>

    <div class="bg-white  hero mr-40">
        <div class="hero-content -mt-20 ">
           
        <form  method="post" action="/registrar">
        <?php 
$validacoes = flash()->get('validacoes'); 



?>
            <div class="card">
                
            <div class="card-body">
                <div class="card-title text-black">Crie a sua conta</div>


                <label class="form-control">
                        <div class="label">
                            <span class="label-text text-gray-700">Nome</span>
                        </div>
                        <input type="text"  
                        name="nome"
                        class=" input 
                                input-bordered 
                                w-full 
                                max-w-xs 
                                bg-white 
                                text-black 
                                border-stone-500" />
                                <?php if(isset($validacoes['nome'])): ?>
                                <div class="label text-xs text-error "><?=$validacoes['nome'][0]?> </div>     
                            <?php endif; ?>
                    </label>
                    <label class="form-control">
                        <div class="label">
                            <span class="label-text text-gray-700">E-mail</span>
                        </div>
                        <input type="text" 
                        name="email" 
                        class=" input 
                                input-bordered 
                                w-full 
                                max-w-xs 
                                bg-white 
                                text-black 
                                border-stone-500" />
                                <?php if(isset($validacoes['email'])): ?>
                                <div class="label text-xs text-error "><?=$validacoes['email'][0]?> </div>     
                            <?php endif; ?>
                    </label>
                    <label class="form-control">
                        <div class="label">
                            <span class="label-text text-gray-700">Confirmar o E-mail</span>
                        </div>
                        <input type="text"  
                        name="email_confirmacao"
                        class=" input 
                                input-bordered 
                                w-full 
                                max-w-xs 
                                bg-white 
                                text-black 
                                border-stone-500" />
                                <?php if(isset($validacoes['email'])): ?>
                                <div class="label text-xs text-error "><?=$validacoes['email'][0]?> </div>     
                            <?php endif; ?>
                                
                    </label>
                    <label class="form-control">
                        <div class="label">
                            <span class="label-text text-gray-700">senha</span>
                        </div>
                        <input type="password" 
                        class=" input 
                                input-bordered 
                                w-full 
                                max-w-xs 
                                bg-white 
                                text-black
                                 border-stone-500" 
                                 name="senha"/>
                                 <?php if(isset($validacoes['senha'])): ?>
                                <div class="label text-xs text-error "><?=$validacoes['senha'][0]?> </div>     
                            <?php endif; ?>
                    </label>
                    <div class="card-actions justify-end">
                        <button class="btn bg-indigo-500 btn-block hover:bg-indigo-700">Registrar</button>

                        <a href="/login" class="btn btn-link text-indigo-400 hover:text-indigo-600 ">Já tenho uma conta</a>
                    </div>


                </div>
            </div>
        </form>


        </div>

    </div>
</div>    

