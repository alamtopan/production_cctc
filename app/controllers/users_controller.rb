class UsersController < InheritedResources::Base
  load_and_authorize_resource
	before_filter :auth, only: :update

  def index
  	@users = User.where("id != ?", current_user.id).order("id DESC").page(params[:page]).per(10)
  end

  def auth
  	if params[:user] && params[:user][:password].blank?
      params[:user].delete("password")
      params[:user].delete("password_confirmation")
    end
  end
end