lock "3.8.2"

set :application, 'baraza'

set :department, 'cdrs'

set :remote_user, "#{fetch(:department)}serv"

set :repo_url, 'git@github.com:cul/cdrs-baraza.git'

set :deploy_to, "/opt/www/#{fetch(:department)}/#{fetch(:application)}_#{fetch(:stage)}"

set :ssh_options, { :forward_agent => true }

set :repo_tree, '_site'

set :keep_releases, 2
