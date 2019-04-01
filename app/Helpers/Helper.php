<?php

namespace App\Helpers;

use Config;
use Request;
use Route;
use Illuminate\Support\Facades\Redirect;

class Helper
{
    public static function throwError($messages, $route = null)
    {
        if (!$route) {
            return Redirect::back()->withErrors(array('alert-danger' => $messages))
                ->withInput(Request::all());
        }

        return $route->withErrors(array('alert-danger' => $messages))->withInput(Request::all());
    }

    public static function msg($opt)
    {
        $messages = app(self::class)->defaultMessages();
        return $messages[$opt] ? $messages[$opt] : "";
    }

    private static function defaultMessages()
    {
        return [
            "create" => "Registrado com sucesso",
            "store" => "Registrado com sucesso",
            "save" => "Salvo com sucesso",
            "update" => "Atualizado com sucesso",
            "email.update" => "Email enviado com sucesso",
            "favorite" => "Favorito adicionado com sucesso",
            "list.deactive" => "Desativado com sucesso",
            "list.reactive" => "Reativado com sucesso",
            "list.active" => "Ativado com sucesso",
            "list.delete" => "Excluído com sucesso",
            "list.restore" => "Restaurado com sucesso",
            "restore" => "Restaurado com sucesso",
            "delete" => "Excluído com sucesso",
            "reactive" => "Reativado com sucesso",
            "error.default" => "Houve um erro com a sua solicitação",
            "error.save" => "Erro ao cadastrar",
            "error.store" => "Erro ao cadastrar",
            "error.dir" => "Caminho inválido",
            "error.unique" => "Já existe um registro com esse nome",
            "error.password" => "A senha atual está incorreta",
            "error.save.multiple" => "Erro ao salvar alguns registros",
            "error.update" => "Erro ao atualizar",
            "error.delete" => "Erro ao excluir",
            "error.hasProfile" => "Usuário não pode ser deletado, pois possui perfil ativo",
            "error.restore" => "Erro ao restaurar",
            "error.email" => "Não foi possível enviar, verifique seu servidor de e-mail.",
            "error.unknown" => "Erro desconhecido, tente novamente.",
            "error.delete.constraint" => "Não é possível excluir, pois existem registros relacionados",
            "error.reactive" => "Erro ao reativar",
            "error.read" => "Houve um erro na sua solicitação",
            "superuser.forbidden" => "Não autorizado",

            "exception.500" => "Houve um erro inesperado do servidor",
            "exception.401" => "Sua sessão expirou. Faça login novamente",
            "exception.403" => "Você não possui permissão de acesso",
            "exception.404" => "Página não encontrada",

            "unauthenticated" => "Não autenticado",
        ];
    }
}