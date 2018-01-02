module.exports = function () {
  // eslint-disable-next-line no-undef
  const visited = Symbol('visited');
  const getImportArgPath = p => p.parentPath.get('arguments')[0];
  const trimChunkName = baseDir => baseDir.replace(/^[./]+|(\.js$)/g, '');

  function getMagicCommentChunkName(importArgNode) {
    const {quasis, expressions} = importArgNode;
    if (!quasis) {
      return trimChunkName(importArgNode.value);
    }

    const baseDir = quasis[0].value.cooked;
    const hasExpressions = expressions.length > 0;
    const chunkName = baseDir + (hasExpressions ? '[request]' : '');
    return trimChunkName(chunkName);
  }

  function promiseAll(p) {
    const argPath = getImportArgPath(p);
    const importArgNode = argPath.node;
    const chunkName = getMagicCommentChunkName(importArgNode);

    if (!argPath.node.leadingComments) {
      argPath.addComment('leading', ` webpackChunkName: '${chunkName}' `);
    }
  }

  return {
    name: 'auto-import-name',
    visitor: {
      Import(p) {
        if (p[visited]) {
          return;
        }
        p[visited] = true;
        promiseAll(p);
      }
    }
  };
};
