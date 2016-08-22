#!/bin/bash

# 1. 取出更改的文件
results=$(git show --pretty="format:" --name-only HEAD~7..HEAD)
if [[ -z "$results" ]];
then
  echo "No changed files found."
  exit
else
  echo "Found changed files: ${results}"
fi

# 2. 获取更改的插件
plugins=()
for file in ${results}
do
  if [[ ${file} == vendor/miaoxing/* ]];
  then
    # 先移除前面的"vendor/miaoxing/",再移除"/"之后的字符串,得到插件名称
    tmp=${file#vendor/miaoxing/}
    tmp=${tmp%%/*}
    tmp=$(echo ${tmp} | sed -E 's/([A-Z])/-\L\1/g')
    plugins+=(${tmp})
  fi
done
# 去重
plugins=($(printf "%s\n" "${plugins[@]}" | sort -u))
echo "Found plugins: ${plugins[@]}"

# 3. 逐个插件推送到子仓库
for plugin in ${plugins[@]}
do
  git subrepo push vendor/miaoxing/${plugin} -d -v
done
