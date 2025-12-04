@extends('layout.app')

@section('content')
    <section class="home_pg">
<div id="menu-novo">
				<ul>
					<li class="home">
						<a href="index.php"><span class="menu_home"><img alt="Home" src="imagens/bling-icon.svg"></span></a>
					</li><li data-text="Cadastros"><a>Cadastros <i class="fas fa-chevron-right visible-sm visible-xs"></i><i class="fas fa-chevron-down hidden-sm hidden-xs"></i></a><ul><li data-text='Clientes e Fornecedores'><a href='contatos.php#list'>Clientes e Fornecedores</a></li></ul>
			</li><li data-text="Vendas"><a>Vendas <i class="fas fa-chevron-right visible-sm visible-xs"></i><i class="fas fa-chevron-down hidden-sm hidden-xs"></i></a><ul><li data-text='Pedidos de Venda'><a href='vendas.php#list'>Pedidos de Venda</a></li><li>
						<a href='relatorios.php?id=3&amp;nome=Vendas'>Relatórios
						</a>
					</li></ul>
			</li></ul>
				<ul id="mobile-menu" class="visible-xs visible-sm"><li>
				<a>Preferências
					<i class="fas fa-chevron-right visible-sm visible-xs"></i>
				</a>
				<ul>
					<li><a href="preferencias.php">Todas as configurações</a></li><li title="Alterar tema" id="temaEscuroMobile" class="temaEscuro">
								<div class="toogle-checkbox">
									<label>
										<input type="checkbox" name="darkThemeMobile" id="darkThemeMobile" class="inputDarkTheme">
										<span></span>
									</label>
								</div>
							</li></ul>
			</li><li onclick="UtilsHelpCenter.endChat();window.location='logout.php'">
				<a title="Sair"href="logout.php"> Sair</a>
			</li>
		</ul>
	</div><div id="top-menu">
					<div id="btn-menu" class="visible-xs visible-sm">
						<i class="fas fa-bars"></i>
					</div><ul id="menu-acoes"><li id="menu_central_extensoes" class="menu">
		<a href="central.extensoes.php" aria-label="Central de extensões" title="Central de extensões">
			<i class="bli bling-central-extensoes"></i>
		</a>
	</li>
			<li id="menu_acoes_assincronas" class="u-relative">
				<a href="acoes.assincronas.php">
					<i class="Icon Icon--16 fas fa-clock AsyncActions-icon"></i>
					<div id="menu_async_actions_error_count" class="Badge Badge--negative Badge--small Badge--rounded Badge--bold u-absolute u-bottom-2 u-right-05" style="display:none"></div>
				</a>
			</li><li id="bell_box">
							<div id="notificationMenu" class="display-none">
								<span class="arrow-up-behind hidden-mobile"></span>
								<span class="arrow-up-front hidden-mobile"></span>
								<div class="notification-box">
									<div class="notification-title-box-content notification-title">
										<span>Notificações</span>
										<a href="central.notificacoes.php" class="ico-none fas fa-cog" title="Configurar notificações"></a>
									</div>
									<div class="notification-list-long-box">
										<div id="no-notification-box"><div class="u-m-2">
							<p class="u-text-center notificationEmptyState">No momento não temos notificações!</p>
							<div class="notificationEmptyStateImg"></div>
						</div></div>
										<ul id="n_list_unread"></ul>
									</div>
									<div class="notification-box-content" id="notification-actions-box">
										<div id="read-all-notifications">
											<i class="fas fa-trash-alt"></i><a>Limpar lista de notificações</a>
										</div>
									</div>
									<div class="notification-box-content notification-title" id="notification-history-title">
										<span>Histórico de Notificações</span>
										<i class="ico-none fas fa-chevron-right"></i>
									</div>
									<div class="notification-list-short-box" style="display: none;">
										<ul id="n_list_history"></ul>
									</div>
								</div>
							</div>
							<div id="bell_content">
								<i id="ico_notification" class="fas fa-bell"></i>
								<span class="display-none"></span>
							</div>
						</li><li title="Acessar dados da empresa"id="accountMenu" class="hidden-xs hidden-sm" data-placement="bottom" data-html="true" data-trigger="manual">
						<a class="myAccount" href="empresa.php">
							<div class="account_content">
								<i class="icon icon-user icon-large"></i>
								<span class="menu-username hidden-xs hidden-sm">FT</span>
							</div>
						</a>
					</li>
					<li class="hidden-xs hidden-sm menu" id="preferencias">
						<a href="preferencias.php" aria-label="Preferências" title="Preferências">
							<i class="fas fa-cog"></i>
						</a>
						<ul>
							<li><a href="preferencias.php">Todas as configurações</a></li><li title=" Alterar tema"id="temaEscuro" class="temaEscuro">
												<div class="toogle-checkbox">
													<label>
														<input type="checkbox" name="darkTheme" id="darkTheme" class="inputDarkTheme">
														<span></span>
													</label>
												</div>
											</li></ul></li><li id="buttonCentralAjuda" aria-label="Central de ajuda" title="Central de ajuda" class="menu">
						<i class="fas fa-question-circle"></i>
					</li><div id="appCentralAjuda" style="position: absolute"></div><li aria-label="Sair" title="Sair" class="hidden-xs hidden-sm" onclick="UtilsHelpCenter.endChat();window.location='logout.php'">
					<a id="sair-sistema" href="logout.php">
						<i class="fas fa-sign-out-alt"></i>
					</a>
				</li>
				<li id="menu-right" class="visible-xs visible-sm">
					<i class="fas fa-ellipsis-h"></i>
				</li>
			</ul></div><div id="top-container">



	<div class="aviso" id='error-messages'></div>
</div>

    </section>

@endsection
